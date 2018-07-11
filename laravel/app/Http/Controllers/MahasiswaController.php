<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
=======
=======
   /**
=======
<<<<<<< HEAD
     /**
=======
<<<<<<< HEAD
>>>>>>> c205fa281143f858f4442b8da902bbe3cf88e8eb
  	/**
  	 * create a new controller instance.
	 *
	 * @return void
	 */
  	public function _construct()
  	{
  		$this->middleware('auth');
  	}

  	/**
  	 * Create the application dashboard.
  	 *
  	 * @return \Illuminate\Http\Response
  	 */
  	public function index()
  	{
  		return view('mahasiswa');
  	}
>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
=======
<<<<<<< HEAD
	/**
=======
    /**
>>>>>>> 55a29291eb49483506f4ebe77e34d1c72af709a2
<<<<<<< HEAD
>>>>>>> 6e238e96ba8dcb53153d15e61f81babfd2ceaa84
=======
>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
>>>>>>> 1695917aa3f7589700f6efed60daf603ece1785c
>>>>>>> c205fa281143f858f4442b8da902bbe3cf88e8eb
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6e238e96ba8dcb53153d15e61f81babfd2ceaa84
=======
=======
<<<<<<< HEAD
>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
>>>>>>> 1695917aa3f7589700f6efed60daf603ece1785c
>>>>>>> c205fa281143f858f4442b8da902bbe3cf88e8eb
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
   
=======
<<<<<<< HEAD
>>>>>>> c205fa281143f858f4442b8da902bbe3cf88e8eb
=======

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
<<<<<<< HEAD
>>>>>>> 6e238e96ba8dcb53153d15e61f81babfd2ceaa84
=======
>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
>>>>>>> 1695917aa3f7589700f6efed60daf603ece1785c
>>>>>>> c205fa281143f858f4442b8da902bbe3cf88e8eb
    public function index()
    {
        return view('mahasiswa');
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======


=======
<<<<<<< HEAD
>>>>>>> c205fa281143f858f4442b8da902bbe3cf88e8eb
=======

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
>>>>>>> 6e238e96ba8dcb53153d15e61f81babfd2ceaa84
>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
>>>>>>> 1695917aa3f7589700f6efed60daf603ece1785c
}
