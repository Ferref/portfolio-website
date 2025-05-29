<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request){
        $abouts = About::all();
        return view('about', ['abouts' => $abouts]);
    }
}
