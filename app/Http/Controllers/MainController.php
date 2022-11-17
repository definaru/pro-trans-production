<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ContactService;


class MainController extends Controller
{

    public function Сontact()
    {
        return view('contact', ['detail' => new ContactService()]);
    }


    public function Documentation()
    {
        return view('doc');
    }


    public function License()
    {
        return view('license');
    }


    public function Responsibility()
    {
        return view('responsibility');
    }


    public function Private()
    {
        return view('privatepolice');
    }

}
