<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}