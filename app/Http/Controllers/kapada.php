<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kapada extends Controller
{
    public function index() {
        return view('kapada');
}
public function account() {
    return view('signup');
}
}
