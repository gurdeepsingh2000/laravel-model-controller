<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        $allMovie = Movie::all();
        return view('HomePage', compact('allMovie'));
    }
}
