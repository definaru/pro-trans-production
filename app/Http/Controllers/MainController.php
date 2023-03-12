<?php

namespace App\Http\Controllers;

use App\Models\Steames;
use App\Models\MoySklad;
use Illuminate\Http\Request;
use App\Providers\ContactService;


class MainController extends Controller
{

    public function Test()
    {
        $modal = Steames::getResult('гайка'); //  getListURL   
        return response()->json($modal);
        //return view('test', ['modal' => $modal]);
    }


    public function About()
    {
        return view('about');
    }


    public function Сontact()
    {
        return view('contact');
    }


    public function Customers()
    {
        return view('customers');
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

    public function Catalog($limit = 2000, $offset = 0)
    {
        $product = MoySklad::getAllProduct($limit, $offset);
        //return response()->json($product);
        return view('catalog', ['product' => $product, 'limit' => $limit, 'offset' => $offset]);
    }

    public function Product(Request $request)
    {
        $request->validate([
            'type' => 'nullable',
            'text' => 'required',
        ]);
        $search = MoySklad::searchByProduct('article', $request->text);
        // Steames::getResult($request->text);
        $text = $request->input('text');
        return redirect()->route('search')->with(['search' => $search, 'text' => $text]);
    }

}
