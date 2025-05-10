<?php

namespace App\Http\Controllers\ApiAuth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $academicLevel = Http::get('http://localhost:8080/api/v1/member/fetchAcademicLevel');

        $accountType =  [
            [
                'name' => 'paticipant',
                'value' => 'بەشداربوو',
            ],
            [
                'id' => 'lecturer',
                'value' => 'وانەبێژ',
            ]
        ];

        return  view('auth.register', compact(['academicLevel', 'accountType']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->day != null && $request->month  != null && $request->year != null) {
            $request->request->add(['date_of_birth' => $request->year . '/' . $request->month . '/' . $request->day]);
        }
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            "account_type" => 'required',
            "date_of_birth" => 'required',
            "academic_level_id" => 'required',
            "gender" => 'required ',
            "mobile_1" => 'required|max:11',
            "email" => 'required|max:255',
            "username" => 'required|string|max:255',
            "password" => 'required|string|max:255',
            "password_confirmation" => 'required|string|max:255',
        ]);
        //chakkrdni form aka
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post('http://localhost:8080/api/v1/member/register', $request->all());
        return redirect()->route('user-register.index')->with('success', 'success');
        // if ($response->successful()) {
        //     return redirect()->route('login')->with('success', '  aaa');
        // } else {
        //     return redirect()->route('register')->withErrors($response->json());
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        try {
            $response   = Http::withHeaders([
                'Accept' => 'application/json',
            ])->post('http://localhost:8080/api/v1/member/login', $request->all());

            if ($response->status() == 422) {
                $errors = $response->json('errors');
                return back()->withErrors($errors)->withInput();
            }
            if ($response->status() == 401) {
                return back()->with('message', 'Verify your email address');
            }

            if ($response->status() == 200) {
                $data = $response->json();
                session(['api_token' => $data['token']]);
                return redirect()->route('home')->with('success', 'Logged in successfully!');
            }
        } catch (Exception $e) {
            return  $e->getMessage();
        }
    }

    public function logout(Request $request)
    {
            $token = session('api_token');
            $response = Http::withToken($token)->post('http://localhost:8080/api/v1/member/logout');
            session()->forget('api_token');
            $data  = $response->json();
            return redirect()->route('login')->with('success', 'Logged out successfully');
            // return redirect(route('login'))->with('message',$data);  
    }
}
