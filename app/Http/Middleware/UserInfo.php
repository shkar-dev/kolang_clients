<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class UserInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = session('api_token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token,
        ])->post(url: 'http://localhost:8080/api/v1/member/getUserInfo');

            
        
        // $data = $response->json();
        // dd($data['user'][0]['verify']);
        if ($response->status() == 200) {
            view()->share('authUser', $response->json());    
        }
        
        return $next($request);
    }
}
