<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Menus;
use App\Models\Pictures;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $email = session('email');
        $user = User::where('email', $email)->first();

        return view('menu.manage', [
            'user' => $user
        ]);
    }

    public function add()
    {
        return view('menu.add');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        // dd($request->all());
        // Simpan data menu
        $menu = Menus::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'user_id' => session('id'),
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images/menu', 'public'); // Simpan di folder public/images

            // Simpan data gambar
            Pictures::create([
                'menu_id' => $menu->id, // Mengaitkan gambar dengan menu yang baru saja dibuat
                'name' => $path,
            ]);
        }

        return redirect()->back()->with('success', 'Menu berhasil ditambahkan.');
    }

    public function update()
    {
        return view('menu.update');
    }

    public function menu()
    {
        return view('menu.menu');
    }

    public function detailMenu($id)
    {
        $menu = Menus::join('users', 'menus.user_id', '=', 'users.id')
            ->select('menus.*', 'users.name as user_name', 'menus.name as menu_name','menus.desc as menu_desc', 'users.*')
            ->where('menus.id', 5)
            ->first();

        $pictures = Pictures::where('menu_id', $id)->get();

        // dd($pictures);

        return view('menu.detail', compact('menu', 'pictures'));
    }
}
