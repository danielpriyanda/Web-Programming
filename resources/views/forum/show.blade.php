@extends('layouts.app')

@section('title')

@endsection

@section('css')
    <style>
        .card-columns{
            column-count: 3;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <h3 class="card-header text-white bg-primary text-center"><i class="fa fa-book"></i> Forum</h3>

        <div class="card-body">
            <div class="card-columns">
                @foreach($forums as $forum)
                    {{--{{dd($forum->enrolls->lectures[0]->lecture_name)}}--}}
                    <div class="card p-2">
                        <img class="card-img-top" src="{{URL('/lecture/image/'.$forum->enrolls->lectures[0]->picture)}}" alt="">
                        <p class="text-center">{{$forum->enrolls->lectures[0]->lecture_name}}</p>
                        @if(Auth::guard('web')->check())
                            <a href="{{URL('/lecture/detail')}}" class="btn btn-sm btn-info mx-auto d-block">View Forum</a>
                        @endif
                    </div>
                @endforeach
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