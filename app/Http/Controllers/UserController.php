<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = users::all();
        return view('admin/pages/users/index', compact('user'));
    }

    public function create()
    {
        return View("admin/pages/users/add");
    }

    public function store(Request $request)
    {
            // dd($request->except(['_token', ])); 
            // Users::create($request-> except(['_token']));
            // return redirect('/users');
            $request->validate([
                'nama' => ['required', 'string', 'max:255'],
                'nis' => ['required', 'string', 'max:255', 'unique:users'],
                'kelas' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            User::create($request->all());

             
    }

    public function edit($id)
    {
        $user = Users::find($id);
        return view('admin/pages/users/edit', compact(['user']));
    }

    public function update($id, Request $request)
    {
        $user = Users::find($id);
        $user->update($request->except(['_token']));
        return redirect('/users');
    }


    public function destroy($id)
    {
        $user = users::find($id);
        $user->delete();
        return redirect('/users');
    }
}
