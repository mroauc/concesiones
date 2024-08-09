<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    public function index(Request $request){
        $input = $request->all();
        $representatives = \App\Models\Representative::all();
        return view('representative.index')->with('representatives', $representatives);
    }
}
