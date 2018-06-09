<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
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

    public function mahasiswa(){
    	return view('mahasiswa');
    }

    //form tambah data
    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        
    }
    
}
