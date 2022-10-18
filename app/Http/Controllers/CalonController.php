<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calons;

class CalonController extends Controller
{
    public function index()
    {
        return view('admin.pages.calon.index', [
            'calons' => Calons::all(),
            'active' => 'calon'
        ]);
    }

}
