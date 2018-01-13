@extends('layouts.app')

@section('title')
        
@endsection

@section('css')
    <style>
        .carousel-item > img{
            width: 100vw;
            height: 100vh;
            filter: contrast(50%) brightness(50%) blur(2px);
        }
        .carousel-caption{
            top:10%;
        }
        .carousel-caption > .caption{
            border: 6px solid #17a2b8;
            background-color: rgba(64,64,63,0.73);
        }
    </style>
@endsection

@section('content')


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active h-100">
                <img class="d-block" src="{{URL::TO('/asset/pexels-photo-207691.jpeg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block d-flex ">
                    <div class="caption p-5 rounded w-75 mx-auto">
                        <h1 class="display-1">Student Helper</h1>
                        <p>With us your activities collage will be more easier and faster</p>
                        @if(Auth::guest())
                            <a href="{{URL('/register')}}" class="btn btn-lg btn-info pt-3 pb-3">JOIN US</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{URL::TO('/asset/writing-notes-idea-conference.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block d-flex ">
                    <div class="caption p-5 rounded w-75 mx-auto">
                        <h1 class="display-1">Student Helper</h1>
                        <p>With us your activities collage will be more easier and faster</p>
                        @if(Auth::guest())
                            <a href="{{URL('/register')}}" class="btn btn-lg btn-info pt-3 pb-3">JOIN US</a>
                        @endif
                    </div>
            </div>
            <div class="carousel-item">
                 <img class="d-block" src="{{URL::TO('/asset/writing-notes-idea-conference.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block d-flex ">
                    <div class="caption p-5 rounded w-75 mx-auto">
                        <h1 class="display-1">Student Helper</h1>
                        <p>With us your activities collage will be more easier and faster</p>
                        @if(Auth::guest())
                            <a href="{{URL('/register')}}" class="btn btn-lg btn-info pt-3 pb-3">JOIN US</a>
                        @endif
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="card-group text-white">
        <div class="card bg-info">
            <div class="card-body text-center">
                <h1 class="display-4"><i class="fa fa-user"></i></h1>
                <h5 class="card-title">Ph.D Title All lectures</h5>
            </div>
        </div>
        <div class="card bg-info">
            <div class="card-body text-center">
                <h1 class="display-4"><i class="fa fa-line-chart"></i></h1>
                <h5 class="card-title">Learn at your pace on any device</h5>
            </div>
        </div>
        <div class="card bg-info">
            <div class="card-body text-center">
                <h1 class="display-4"><i class="fa fa-shield"></i></h1>
                <h5 class="card-title">Data is Secure</h5>
            </div>
        </div>
        <div class="card bg-info">
            <div class="card-body text-center">
                <h1 class="display-4"><i class="fa fa-users"></i></h1>
                <h5 class="card-title">150.000 Members</h5>
            </div>
        </div>
    </div>
    
    
@endsection

@section('footer')
    <footer class="text-center p-5 bg-dark text-white">
        <h4>&copy; E-learning 2018. AllRight Reserved.</h4>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-secondary active" href="#">Privacy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Term</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="#">About</a>
            </li>
        </ul>
    </footer>
@endsection