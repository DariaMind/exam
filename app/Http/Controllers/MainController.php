<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    $title = 'HELLO';   
    return view('main.index', compact('title'));
}
}
