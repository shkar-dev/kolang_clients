<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $id =26;
        $token = session('api_token');
        $groups = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '. $token,
        ])->get('http://localhost:8080/api/v1/member/fetchGroup/{{$id}}' );
         if($groups->status() == 200 ){
            view()->share('groups', $groups->json());    
        }
    }
}
