<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $email = session('email');
        $user = User::where('email', $email)->first();

        $isEditing = $request->query('edit') === 'true';
        return view('profile.profile', [
            'isEditing' => $isEditing,
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . session('id'),
            'desc' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($request->all());

        $user = User::where('email', session('email'))->first();

        // Update data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->desc = $request->input('desc');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();

        // Perbarui session dengan data terbaru
        session([
            'name' => $user->name,
            'email' => $user->email,
            'type' => $user->type,
            'id' => $user->id,
        ]);

        return redirect()->route('profile')->with('success', 'Biodata berhasil diperbarui!');
    }
}
