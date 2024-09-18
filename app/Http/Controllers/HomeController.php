<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        // return view ('home');
        $konten = TblDinamis::all();
        return view('home', compact('konten'));
    }
}
