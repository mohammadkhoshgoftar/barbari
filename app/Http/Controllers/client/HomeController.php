<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index.index');
    }
    public function test()
    {
        return view('client.index.test');
    }
    public function form()
    {
        return view('client.index.form');
    }
}
