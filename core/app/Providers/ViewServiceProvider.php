<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Auth\Guard; 
use Illuminate\Support\ServiceProvider;
use App\Models\UserAnswer;

class ViewServiceProvider extends ServiceProvider
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
    public function boot(Guard $auth)
    {
        //   $activeTemplate = activeTemplate();
        // // Using Closure based composers...
        // View::composer($activeTemplate.'user.auth.questionnaire.questions',function ($view) use ($auth) {
        //     $view->with('answer', UserAnswer::where('user_id',$auth->user()->id)->get());
        // });


    }
}