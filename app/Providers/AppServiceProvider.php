<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\DaData;
use App\Models\MoySklad;
use App\Models\Declension;
use App\Models\FormatCurrency;
use App\Models\Card;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Providers\GetMenu;
use App\Models\UiComponent;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Notifications\Messages\MailMessage;
use App\Providers\ContactService;


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
            'menu'          => GetMenu::dataMenu(),
            'nouser'        => GetMenu::nouser(),
            'stop'          => GetMenu::dataMenuStop(),
            'usermenu'      => GetMenu::user(),
            'helpmenu'      => GetMenu::help(),
            'catalog'       => GetMenu::catalog(),
            'catalogTrucks' => GetMenu::catalogTrucks(),
            'contact'       => new ContactService(),
            'time'          => new Carbon(),
            'MoySklad'      => new MoySklad(),
            'currency'      => new FormatCurrency(),
            'decl'          => new Declension(),
            'deal'          => new Card(),
            'dadata'        => new DaData(),
            'url'           => $_SERVER['REQUEST_URI']
        ]);
    }
}
