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
<<<<<<< HEAD
=======


    public function mahasiswa()
    {
        return view('mahasiswa');
    }

>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
>>>>>>> 1695917aa3f7589700f6efed60daf603ece1785c
}
