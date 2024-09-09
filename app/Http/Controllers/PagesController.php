<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function getTrades()
    {
        return view('frontend.trades.index');
    }

    public function getTradeDetails()
    {
        return view('frontend.trades.show');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
