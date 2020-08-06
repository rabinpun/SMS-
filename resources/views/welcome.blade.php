@extends('layouts.app')

@section('content')
    <div class="home-img-container-wrapper img-fluid" alt="Responsive image">
        
        <div class="home-img-container-bg" style="background-image: url(school_img/img0.jpg)"></div>
        <div class="home-img-text-wrapper">
            <h1 style="align-content: center">Welcome To SMS: Student Management System
            </h1>
        
    </div>
    </div>
    <hr>
    <script>
        const homeitems = document.querySelectorAll('.home-img-container-wrapper');
        homeitems.forEach(homeitem => {
            homeitem.addEventListener('mouseover',()=>{
                console.log(homeitem.childNodes[1].classList);
                homeitem.childNodes[1].classList.add('img-darken');
            })
            homeitem.addEventListener('mouseout',()=>{
                console.log(homeitem.childNodes[1].classList);
                homeitem.childNodes[1].classList.remove('img-darken');
            })
            
        })
    </script>
    
@endsection
