<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class OnOffcontroller extends Controller
{
    public function index() {
        $users = User::paginate(5);

        return view('admin/pages/dashboard/index', compact('users'));
    }

    public function changeStatus(Request $request) {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    }
}
