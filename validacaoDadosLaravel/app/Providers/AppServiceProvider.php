<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('num_par', function($attribute, $value, $parameters, $validator){
           //valor dividido por 2 é igual a zero, então é par, se houver resto, então há a negação com o sinal ! 
           return !($value % 2);
        });
    }
}
