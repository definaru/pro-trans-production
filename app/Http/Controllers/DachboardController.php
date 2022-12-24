<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\MakeContract;
use App\Models\Contract;
use App\Models\Telegram;
use App\Models\MoySklad;
use App\Models\DaData;


class DachboardController extends Controller
{

    public function Dashboard()
    {
        return view('dashboard');
    }

    public function searchDashboard(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'text' => 'required',
        ]);
        //$validated = $request->validated();
        $search = MoySklad::searchByProduct($request->type, $request->text);
        $text = $request->input('text');
        //$validated = $request->safe()->only(['type', 'text']);
        return redirect()->route('dashboard')->with(['search' => $search, 'text' => $text]);
    }

    public function Settings()
    {
        $uuid = auth()->user()->verified;
        $profile = MoySklad::getCompany($uuid);
        return view('dashboard.profile.settings', ['profile' => $profile]);
    }

    public function Events() 
    {
        return view('dashboard.events');
    }

    public function Schedule() 
    {
        return view('dashboard.work.schedule');
    }

    public function Help() 
    {
        return view('dashboard.help');
    }

    public function Notifications() 
    {
        return view('dashboard.notifications');
    }

    public function Orders() 
    {
        $orders = MoySklad::getInvoices();
        //return response()->json($orders);
        return view('dashboard.payment.orders', ['orders' => $orders]);
    }

    public function Invoice($invoice) 
    {
        $order = MoySklad::getInvoiceOne($invoice);
        //return response()->json($order);
        return view('dashboard.payment.order', [
            'order' => $order, 
            'id' => $invoice
        ]);
    }

    public function Account() 
    {
        return view('dashboard.payment.account');
    }

    public function updateAgreement(MakeContract $request)
    {
        $uuid = auth()->user()->verified;
        $message = 'Данные договора обновлены. Пожалуйста, сверьте данные и подтвердите.';
        $doc = Contract::find($uuid)->update($request->all());
        return redirect()->route('contract')->with(['status' => $message]);
    }

    public function sendAgreement(MakeContract $request)
    {
        $contract = MoySklad::getContract();
        $message = 'Ваш запрос на заключение договора получен. Пожалуйста, сверьте данные и подтвердите.';
        $request->validate(MakeContract::rules());
        Telegram::getMessageTelegram(time(), 'Запрос на заключение договора.', $contract['meta']['uuidHref']);
        Contract::create($request->all());
        return back()->with(['status' => $message]);
    }

    public function sendDeal(Request $request)
    {
        $message = 'Поздравляем! Договор заключён, теперь его можно сохранить или распечатать.';
        MoySklad::enterIntoAcontract($request->deal, $request->accountId);
        return redirect()->route('contract')->with(['status' => $message]);
    }

    public function EditAgreement()
    {
        $uuid = auth()->user()->verified;
        $contract = Contract::find($uuid);
        return view('document.edit-agreement', ['contract' => $contract]);
    }

    public function Agreement() 
    {
        $contract = MoySklad::getContract();
        //$bank = DaData::bank($contract['agent']['inn']);
        return view('document.agreement', [
            'contract' => $contract,
            //'bank' => $bank
        ]);
    }

    public function Record() 
    {
        return view('dashboard.payment.record');
    }

    public function Catalog()
    {
        return view('dashboard.catalog');
    }

    public function DetailProduct($id, Request $request)
    {
        if ($request->has(['name', 'phone'])) {
            Telegram::getMessageTelegram($request->num, $request->message, $request->id);
            return back()->with(['status' => 'Ваш тикет отправлен и получен. Ожидайте ответа от менеджера']);
        }
        $product = MoySklad::getOneProduct($id);
        return view('dashboard.product.details', [
            'id' => $id,
            'product' => $product
        ]);
    }

    public function CatalogDetail($name, $limit = 10, $offset = 0)
    {
        $catalog = MoySklad::getCategory($name);
        $product = MoySklad::getAllProduct($limit, $offset);
        //$pagination = new Pagination();
        return view('dashboard.catalog-detail', [
            'name' => $name,
            //'pagination' => $pagination,
            'catalog' => $catalog,
            'product' => $product,
            'limit' => $limit, 
            'offset' => $offset
        ]);
    }

    public function ReportsDetail($order)
    {
        $response = MoySklad::getPaymentReports($order);
        //return response()->json($response);
        return view('dashboard.payment.reports-detail', [
            'data' => $response
        ]);
    }

    public function Сard()
    {
        return view('сard');
    }

    public function Reports()
    {
        $reports = MoySklad::getReports();
        //return response()->json($reports);
        return view('dashboard.payment.reports', ['reports' => $reports]);
    }
    
    public function SendSpares(Request $request)
    {
        $uuid = auth()->user()->verified;
        //dd($request);
        Telegram::getMessageTelegram($uuid, $request->spares, $request->vin, 'spares');
    }

    public function Checkout($account)
    {
        //$uuid = auth()->user()->verified;
        Telegram::getMessageTelegram('d8d7e6b2-8225-11ed-0a80-03ac002b5be3', '', '', 'сheckout');
        return response()->json($account);
    }
    
    
}
