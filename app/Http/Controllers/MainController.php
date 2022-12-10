<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ContactService;


class MainController extends Controller
{

    public function Сontact()
    {
        return view('contact');
    }


    public function Documentation()
    {
        return view('doc');
    }


    public function License()
    {
        return view('doc.license');
    }


    public function Responsibility()
    {
        return view('doc.responsibility');
    }


    public function Private()
    {
        return view('doc.privatepolice');
    }

}
