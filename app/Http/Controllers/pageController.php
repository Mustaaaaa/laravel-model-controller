<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function index() { 
        $movies = movies::all();
        // dd($movies);
        return view('home', compact('movies'));
    }
}
