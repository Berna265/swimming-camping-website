<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Information Function
    public function information() {
        return view('information');
    }

    //Available Function
    public function available() {
        return view('available');
    }

    //Reviews Function
    public function reviews() {
        return view('reviews');
    }
}
