<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
        public function create()
    {
        return view('layouts/index');
    }

    public function liste()
    {
        return view('Enseignants/liste');
    }
}
