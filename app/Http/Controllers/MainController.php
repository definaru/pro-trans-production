<?php

namespace App\Http\Controllers;

use App\Models\MoySklad;
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


    public function ReturnPolicy()
    {
        return view('doc.return-policy');
    }


    public function Guaranty()
    {
        return view('doc.guaranty');
    }


    public function Responsibility()
    {
        return view('doc.responsibility');
    }


    public function Private()
    {
        return view('doc.privatepolice');
    }

    public function DetailProduct($id)
    {
        $product = MoySklad::getOneProduct($id);
        return view('product', [
            'id' => $id,
            'product' => $product
        ]);
        //return view('product', ['id' => $id]);
    }

}
