@extends('layouts.app')

@section('title')

@endsection

@section('css')
    <style>
        .card-columns{
            column-count: 4;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <h3 class="card-header text-white bg-primary text-center"><i class="fa fa-book"></i> Lectures</h3>

        @if(Session::has('success'))
            <div class="alert alert-info text-center">
                {{Session::get('success')}}
            </div>
        @endif

        <div class="card-body">
            <div class="card-columns">
                @foreach($lectures as $lecture)
                    <div class="card p-2">
                        <img class="card-img-top" src="{{URL('/lecture/image/'.$lecture->picture)}}" alt="">
                        <p class="text-center">{{$lecture->lecture_name}}</p>
                        @if(Auth::guard('web')->check())
                            <a href="{{URL('/enroll/add/'.$lecture->id)}}" class="btn btn-sm btn-primary">Enroll Now</a>
                            <a href="{{URL('/lecture/detail')}}" class="btn btn-sm btn-info float-right">View Detail</a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer text-center">
            <ul class="d-flex justify-content-center">
                {{$lectures->render()}}
            </ul>
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