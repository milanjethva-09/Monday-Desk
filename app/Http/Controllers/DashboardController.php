<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = DB::table('products')->count();
        $totalOrders = DB::table('orders')->count();

        return view('dashboard', compact('totalProducts', 'totalOrders'));
    }
}
