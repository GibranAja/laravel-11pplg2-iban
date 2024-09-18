<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        // return view ('contact');
        $konten = TblDinamis::all();
        return view('contact', compact('konten'));
    }
}
