<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;
use App\Models\Role;
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
        //return response()->json($receipt);
        return view('dashboard.admin.accounting', ['receipt' => $receipt]);
    }


    public function Users()
    {
        $model = MoySklad::getAllAgent();
        // User::query()
        //     ->join('card', 'users.verified', '=', 'card.user_id')
        //     ->join('customer', 'users.verified', '=', 'customer.uuid')
        //     ->get(['customer.uuid', 'users.name', 'customer.company', 'users.email', 'users.created_at', 'card.id_card', 'customer.okved', 'customer.inn', 'customer.ogrn', 'customer.kpp', 'customer.ogrn_date']);
        
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
        $agent = MoySklad::getOneCounterparty($uuid);
        //return response()->json($model);
        return view('dashboard.admin.user', compact('uuid', 'model', 'agent'));
    }


    public function Contracts()
    {
        // $model = Customer::query()
        //     ->join('card', 'customer.uuid', '=', 'card.user_id')
        //     ->join('contract', 'customer.uuid', '=', 'contract.uuid')->get();
        $model = MoySklad::getAllContract(100);
        //return response()->json($model);
        return view('dashboard.admin.contracts', ['model' => $model]);
    }


    public function activeContract($id)
    {
        $model = Card::where('user_id', $id)->update(['id_card' => 1]);
        return response()->json($model); 
    }


    public function blockContract($id) 
    {
        $model = Card::where('user_id', $id)->update(['id_card' => 2]);
        return response()->json($model); 
    }


    public function oneContract($id)
    {
        $model = MoySklad::getContractId($id);
        //$status = Card::where('user_id', $model['agent']['id'])->first();
        $status = [];
        if(isset($model['agent']['id'])) {
            $status = Card::firstOrCreater($model['agent']['id']);
        }
        return view('dashboard.admin.contract', compact('id', 'model', 'status'));
    }


    public function Access($id)
    {
        $model = Role::query()
            ->join('users_roles', 'roles.id', '=', 'users_roles.role_id')
            ->join('users', 'users_roles.user_id', '=', 'users.id')
            ->join('customer', 'users.verified', '=', 'customer.uuid')
            //->join('permissions', 'users_permissions.permission_id', '=', 'permissions.id')
            ->get();
        //return response()->json($model);
        if($id) {
            return view('dashboard.admin.access.details', compact('id'));
        }
        return view('dashboard.admin.access', compact('id', 'model'));
    }

    public function Nomenclature()
    {
        $list = Api1CFresh::nomenclature();
        //return response()->json($list);
        return view('dashboard.admin.nomenclature', ['list' => $list]);
    }

    public function Gtd($id)
    {
        $model = Api1CFresh::gtd($id);
        //return response()->json($model);
        return view('dashboard.admin.gtd', ['model' => $model]);
    }

    public function Email()
    {
        $model = [];
        return view('dashboard.admin.email', ['model' => $model]);
    }
    

}