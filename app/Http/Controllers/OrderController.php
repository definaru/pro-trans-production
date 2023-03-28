<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Checkout;
use App\Models\MoySklad;


class OrderController extends Controller
{

    public function Checkout(Checkout $request)
    {
        // name,phone,email,address,сheckout
        $request->validate(Checkout::rules());
        $res =[ 
            'counterparty' => [
                'name' => $request->name,
                'code' => strval(rand(1000, 9999)),
                'companyType' => 'individual',
                'email' => $request->email,
                'phone' => $request->phone,
                'actualAddress' => $request->address == '' ? '...' : $request->address,
                'legalAddress' => $request->address == '' ? '...' : $request->address,
                'tags' => [  
                    'незарегистрированный', 
                    'пользователь'
                ],
            ]
        ];
        $user = MoySklad::newUserAlien($res['counterparty']);
        if($user) {
            $result = MoySklad::getNewOrderFromGuest($user['id'], $request->сheckout);
            return redirect()->route('userorder')->with(
                [
                    'data' => $res['counterparty'], 
                    'order' => $result['name'],
                    'id' => $result['id']
                ]
            );
            //return response()->json($result['id']);
        }
    }

    public function Order()
    {
        return view('order');
    }
    
    // public function login(UserLogin $request)
    // {
    //     $credentials = $request->validate(UserLogin::rules());
    //     if (Auth::check()) {
    //         return redirect()->intended('dashboard');
    //     }
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('dashboard');
    //     }
    //     return redirect()->route('signin');
    // }

    // public function Product(Request $request)
    // {
    //     $request->validate([
    //         'type' => 'nullable',
    //         'text' => 'required',
    //     ]);
    //     $url = Steames::getListResult($request->text);
    //     $search = MoySklad::searchOfResult($url);
    //     $text = $request->input('text');
    //     //return response()->json($search);
    //     return redirect()->route('search')->with(['search' => $search, 'text' => $text]);
    // }

}
