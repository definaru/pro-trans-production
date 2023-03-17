<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\DaData;
use App\Models\MoySklad;
use App\Models\Declension;
use App\Models\FormatCurrency;
use App\Models\Card;
use App\Models\Names;
use App\Models\Image;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Providers\GetMenu;
use App\Providers\GetOrder;
use App\Models\UiComponent;
use App\Models\TimeFormat;
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
            'adminmenu'     => GetMenu::adminMenu(),
            'nouser'        => GetMenu::nouser(),
            'stop'          => GetMenu::dataMenuStop(),
            'usermenu'      => GetMenu::user(),
            'helpmenu'      => GetMenu::help(),
            'catalog'       => GetMenu::catalog(),
            'catalogTrucks' => GetMenu::catalogTrucks(),
            'listorder'     => GetOrder::GoodsAreAvailable(),
            'bestsellers'   => GetOrder::Bestsellers(),
            'alllist'       => GetOrder::list(),
            'names'         => new Names(),
            'contact'       => new ContactService(),
            'time'          => new Carbon(),
            'timer'         => new TimeFormat(),
            'MoySklad'      => new MoySklad(),
            'currency'      => new FormatCurrency(),
            'decl'          => new Declension(),
            'deal'          => new Card(),
            'dadata'        => new DaData(),
            'images'         => new Image()
        ]);
    }
}
