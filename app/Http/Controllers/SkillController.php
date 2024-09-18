<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill() {
        // return view ('skill');
        $konten = TblDinamis::all();
        return view('skill', compact('konten'));
    }
}
