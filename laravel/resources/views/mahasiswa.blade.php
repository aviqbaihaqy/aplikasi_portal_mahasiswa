@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">Mahasiswa</div>
=======
<<<<<<< HEAD
                <div class="card-header">Mahasiswa</div>
=======
<<<<<<< HEAD
                <div class="card-header">Mahasiswa</div>
=======
<<<<<<< HEAD
                <div class="card-header">Welcome, Mahasiswa</div>
=======
                <div class="card-header">Mahasiswa</div>
>>>>>>> 55a29291eb49483506f4ebe77e34d1c72af709a2
>>>>>>> 6e238e96ba8dcb53153d15e61f81babfd2ceaa84
>>>>>>> 1facb690d5b44e1322e327dfd3d44e9be0c96522
>>>>>>> 1695917aa3f7589700f6efed60daf603ece1785c

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
