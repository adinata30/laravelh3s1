<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function admin()
    {
        return view("admin");
    }

    public function user()
    {
        return view("user");
    }
}
