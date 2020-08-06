@extends('layouts.app')

@section('content')
    <div class="home-img-container-wrapper img-fluid" alt="Responsive image">
        
        <div class="home-img-container-bg" style="background-image: url(school_img/img0.jpg)"></div>
        <div class="home-img-text-wrapper">
            <h4>Believe in us and we will deliver the quality. The gold standard of the quality education. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta perspiciatis explicabo non quis ut, porro quasi at praesentium, quo iure ad ipsa nobis accusamus nulla fugit voluptas? Officia, commodi dignissimos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sapiente consectetur ullam molestias cumque autem reiciendis cupiditate molestiae officia illum fuga vitae maiores voluptatum eligendi pariatur, eum alias deleniti unde.
            </h4>
        
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
