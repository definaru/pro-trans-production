<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\DaData;
use App\Models\MoySklad;
use App\Models\Api1CFresh;


class AdminController extends Controller
{

    public function adminDoc()
    {
        $list = MoySklad::viewPrintDocument();
        return view('dashboard.admin.doc', ['list' => $list]);
    }

    public function Accounting()
    {
        $receipt= Api1CFresh::DocumentReceiptToCurrentAccount();
        return response()->json($receipt);
        //return view('dashboard.admin.accounting', ['receipt' => $receipt]);
    }

    public function Users()
    {

        $model = User::query()
            ->join('card', 'users.verified', '=', 'card.user_id')
            ->join('customer', 'users.verified', '=', 'customer.uuid')
            ->get(['customer.uuid', 'users.name', 'customer.company', 'users.email', 'users.created_at', 'card.id_card', 'customer.okved', 'customer.inn', 'customer.ogrn', 'customer.kpp', 'customer.ogrn_date']);
        //Customer::all();
        //User::all('id','name','email','verified','created_at','updated_at')->test;
        //::select('users.id','users.name','users.email','users.verified','users.created_at','users.updated_at')
   
        //return response()->json($model);
        return view('dashboard.admin.users', ['model' => $model]);
    }

    public function Okved($okved)
    {
        $data = DaData::okved($okved);
        return view('dashboard.admin.okved', ['okved' => $okved, 'data' => $data]);
    }

    public function User($uuid)
    {
        $model = User::where('verified', $uuid)
            ->join('card', 'users.verified', '=', 'card.user_id')
            ->join('customer', 'users.verified', '=', 'customer.uuid')
            ->get();
        //return response()->json($model);
        return view('dashboard.admin.user', ['uuid' => $uuid, 'model' => $model]);
    }

}