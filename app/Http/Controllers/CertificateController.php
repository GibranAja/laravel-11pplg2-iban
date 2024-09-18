<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function certificate() {
        // return view ('certificate');
        $konten = TblDinamis::all();
        return view('certificate', compact('konten'));
    }
}
