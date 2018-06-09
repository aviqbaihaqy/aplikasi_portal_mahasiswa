<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
<<<<<<< HEAD
	/**
=======
    /**
>>>>>>> 55a29291eb49483506f4ebe77e34d1c72af709a2
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
<<<<<<< HEAD
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
    
=======
     * menampilkan user interace keseluruhan data
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa');
    }

    /**
     * menampilkan user interface form tambah data
     *
     * @return void
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * method untuk memasukkan data ke database
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //perintah untk memasukkan data ke database
    }

    /**
     * menampilkan user interface form edit data
     *
     * @return void
     */
    public function edit($id)
    {
        return view('mahasiswa.edit');
    }

    /**
     * method untuk mengupdate data
     *
     * @param [type] $id
     * @param Request $request
     * @return void
     */
    public function update($id, Request $request)
    {
        //perintah untuk mengupdate data
    }


    /**
     * perintah untuk menghapus data
     *
     * @param [type] $id
     * @return void
     */
    public function destroy($id)
    {
        //perintah untuk menghapus data
    }

>>>>>>> 55a29291eb49483506f4ebe77e34d1c72af709a2
}
