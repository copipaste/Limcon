<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index(){
        return view('help.index');
    }
    public function mision(){
        return view('help.mision');
    }
    public function problematica(){
        return view('help.problematica');
    }
    public function solucion(){
        return view('help.solucion');
    }
}
