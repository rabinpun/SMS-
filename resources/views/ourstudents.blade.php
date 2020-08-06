@extends('layouts.app')
@section('content')
    <div class="img-fluid" alt="Responsive image">
        <h2 style="text-align: center">Meet Our Students</h2>
    
        @auth 
            <h2>Check our students 
            <a class="btn btn-success" href="/students">View Student List</a>
            </h2>
        @endauth
        <div >
        <div class="stud-imgs ">

        </div>
        </div>
    </div> 
@endsection