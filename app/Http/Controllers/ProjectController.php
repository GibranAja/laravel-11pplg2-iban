<?php

namespace App\Http\Controllers;

use App\Models\TblDinamis;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project() {
        // return view ('project');

        $konten = TblDinamis::all();
        return view('project', compact('konten'));
    }
}
