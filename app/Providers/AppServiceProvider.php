<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Providers\GetMenu;
use App\Models\UiComponent;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Notifications\Messages\MailMessage;


class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        view()->composer('*', function($view)
        {
            $user = Auth::check() ? Auth::user() : null;
            $view->with('user', $user);
        });

        UiComponent::list();

        View::share([
            'menu' => GetMenu::dataMenu(),
            'usermenu' => GetMenu::user(),
            'helpmenu' => GetMenu::help(),
            'catalog' => GetMenu::catalog(),
            'catalogTrucks' => GetMenu::catalogTrucks()
        ]);
    }
}
