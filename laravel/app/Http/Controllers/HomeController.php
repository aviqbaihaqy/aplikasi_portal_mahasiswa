<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD
=======

    public function mahasiswa()
    {
        return view('mahasiswa');
    }
>>>>>>> 57f7e5e9f5993c316a0d67fe46580af0bc538a67
}
