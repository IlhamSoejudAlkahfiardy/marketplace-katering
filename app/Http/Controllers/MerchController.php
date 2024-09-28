<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function merch()
    {
        return view('merch.merch');
    }

    public function detailMerch()
    {
        return view('merch.detail');
    }

    public function menu()
    {
        return view('menu.menu');
    }

    public function detailMenu()
    {
        return view('menu.detail');
    }

}
