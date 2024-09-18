<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        // return view('about');
        $konten = TblDinamis::all();
        return view('about', compact('konten'));
    }
}
