<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserLogin;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Customer;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUser;
use App\Models\MoySklad;


class AuthController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function reset()
    {
        return view('reset');
    }

    public function SendMail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user) {
            Mail::to($request->email)->send(new NewUser($user));
        }
        return [
            'message' => 'Send post mail get started'
        ];
    }

    public function Sigature(Request $request)
    {
        $customer = Role::where('slug','customer')->first();
        $view     = Permission::where('slug','view')->first();
        // $edit     = Permission::where('slug','edit')->first();
        // $update   = Permission::where('slug','update')->first();
        // $delete   = Permission::where('slug','delete')->first();
        // $create   = Permission::where('slug','create')->first();
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->verified = $request->verified;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->roles()->attach($customer);
        $user->permissions()->attach($view);
        //->sync(array($view, $edit, $update, $delete, $create));
        
        return [
            'message' => 'Success, user created!'
        ];
    }

    public function Customer(Request $request)
    {
        Customer::create([
            'uuid' => $request->uuid,
            'superintendant' => $request->superintendant,
            'company' => $request->company,
            'okved' => $request->okved,
            'inn' => $request->inn,
            'ogrn' => $request->ogrn,
            'kpp' => $request->kpp,
            'address' => $request->address,
            'ogrn_date' => $request->ogrn_date,
        ]);
        return [
            'message' => 'Success! Contact is added'
        ];
    }

    public function register()
    {
        return view('signup');
    }

    public function dashboard(Request $request)
    {
        $search = [];
        if ($request->has(['type', 'text'])) {
            $search = MoySklad::searchByProduct($request->type, $request->text);
        }
        return view('dashboard', ['search' => $search]);
    }

    public function login(UserLogin $request)
    {
        $credentials = $request->validate(UserLogin::rules());
        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return redirect()->route('index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
