<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('v_home');
    }

    public function about($id)
    {
        return 'Ini Halaman About<br>'. $id;
    }
}
