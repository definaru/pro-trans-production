<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\MoySklad;


class PDFController extends Controller
{

    public function generatePDF($id, $name)
    {
        $data = [
            'order' => MoySklad::getInvoiceOne($id)
        ];
        $pdf = PDF::loadView('document.pdf', $data, [], 'UTF-8');
        return $pdf->download('Документ №'.$data['order']['name'].'.pdf');
        //->stream();
        //return $pdf
    }
}
