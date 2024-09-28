<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topMenus = Menus::select('menus.id', 'menus.name as menu_name', 'menus.desc', 'menus.price', 'pictures.name as picture_name')
            ->join('pictures', 'menus.id', '=', 'pictures.menu_id')
            // ->take(2)
            ->get();
        // dd($topMenus);

        return view('home', ['topMenus' => $topMenus]);
    }
}
