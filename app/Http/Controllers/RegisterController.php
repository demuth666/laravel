<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('admin/pages/users/add', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:users',
            'kelas' => 'required',
            'password' => 'required',
        ]);

        $user = new User([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('users');
    }

}
