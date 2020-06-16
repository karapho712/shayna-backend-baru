<?php

namespace App\Http\Controllers;


use App\Models\Transactions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $income = Transactions::where('transaction_status','SUCCESS')->sum('transaction_total');
        $sales = Transactions::count();
        $items = Transactions::orderBy('id', 'DESC')->take(5)->get();
        $pie =[
            'pending' => Transactions::where('transaction_status', 'PENDING')->count(),
            'failed' => Transactions::where('transaction_status', 'FAILED')->count(),
            'success' => Transactions::where('transaction_status', 'SUCCESS')->count(),
        ];

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie,
        ]);

    }
}
