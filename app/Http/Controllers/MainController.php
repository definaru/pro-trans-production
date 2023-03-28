<?php

namespace App\Http\Controllers;

use App\Models\Steames;
use App\Models\MoySklad;
use Illuminate\Http\Request;
use App\Providers\ContactService;
use App\Models\Goods;


class MainController extends Controller
{

    public function Test()
    {
        $modal = MoySklad::getAllGoods(); //  getListURL   
        //$list = response()->json($modal);

        $data = [];
        foreach($modal as $item) {
            $data[] = [
                'link' => $item['link'], 
                'image' => $item['image'], 
                'article' => $item['article'],
                'name' => $item['name'], 
                'description' => $item['description'], 
                'price' => $item['price'], 
                'quantity' => $item['quantity']
            ];
        }
        Goods::upsert($data, ['article'], ['quantity']); // insert // updateOrCreate // create
        return view('test', ['modal' => $data]);
        // return redirect()->route('search')->with(['search' => $search, 'text' => $text]);
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
        $data = Goods::where('link', $id)->get();
        return view('product', [
            'id' => $id,
            'product' => $product,
            'data' => $data
        ]);
    }

    public function Catalog($limit = 200, $offset = 0)
    {
        $product = MoySklad::getAllProduct($limit, $offset);
        //return response()->json($product);
        return view('catalog', ['product' => $product, 'limit' => $limit, 'offset' => $offset]);
    }

    public function Files(Request $request)
    {
        $request->validate([
            'uuid' => 'required',
            'file' => 'required'
        ]);
        $uuid = $request->input('uuid');
        $uploaddir = './img/goods/';
        $uploadfile = $uploaddir . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            Goods::where('link', $uuid)->update(['image' => $uploadfile]);
            return redirect('/dashboard/product/details/'.$uuid)->with(['text' => 'Фото товара загружено']);
        } else {
            print_r('Ошибка!');
        }
    }

    public function Product(Request $request)
    {
        $request->validate([
            'type' => 'nullable',
            'text' => 'required',
        ]);
        $url = Steames::getListResult($request->text);
        $search = MoySklad::searchOfResult($url);
        $text = $request->input('text');
        //return response()->json($search);
        return redirect()->route('search')->with(['search' => $search, 'text' => $text]);
    }

    public function Partner()
    {
        return view('partner');
    }

    public function Shipper()
    {
        return view('shipper');
    }

    public function Developers()
    {
        return view('developers');
    }

    public function Card()
    {
        return view('card');
    }

}
