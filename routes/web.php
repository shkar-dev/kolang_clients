<?php

use App\Http\Controllers\ApiAuth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\UserInfo;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('user_register', [RegisterController::class, 'index'])->name('user-register.index');
Route::post('user_register', [RegisterController::class, 'create'])->name('user-register.create');
Route::post('user_login', [RegisterController::class, 'login'])->name('user-register.login');
Route::post('user_logout', [RegisterController::class, 'logout'])->name('user-register.logout');
Route::middleware([\App\Http\Middleware\AuthenticateWithToken::class,UserInfo::class])->group(function () {
    
    Route::get('/courses',function(){
        return view('pages.course');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('newhome', function () {
        return view('newhome');
    })->name('newhome');
    Route::get('/verification',function(){
        return view('pages.verification');
    })->name('verification');
    
    Route::post('/verification',function(\Illuminate\Http\Request $request){
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required',
        ]);
        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }
        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token,
        ])->post('http://localhost:8080/api/v1/member/verification', $request->all());

        if($response->status() == 200){
            $data = $response->json();
            return response()->json([$data]);
        }
        return 1;
    })->name('verification');
    Route::post('/verify_code',function(\Illuminate\Http\Request $request){
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required',
            'verification_code' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }
        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token,
        ])->post('http://localhost:8080/api/v1/member/verify_code', $request->all());
        if($response->status() == 200){
            session()->flash('verification1', 'Your action was successful!');
            return response()->json(['redirect' => route('newhome' )]);
        }
    })->name('verify_code');
 });
