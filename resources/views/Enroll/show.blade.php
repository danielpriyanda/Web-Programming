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
        <h4 class="card-header text-center text-white bg-primary">My Enroll</h4>
        <div class="card-body">
            <div class="card-columns">
                @foreach($enrolls as $enroll)
                    <div class="card p-2">
                        <img class="card-img-top" src="{{URL('/lecture/image/'.$enroll->lectures[0]->picture)}}" alt="">
                        <p class="text-center">{{$enroll->lectures[0]->lecture_name}}</p>
                        @if(Auth::guard('web')->check())
                            <a href="{{URL('/lecture/detail/'.$enroll->lectures[0]->id)}}" class="btn btn-sm btn-info mx-auto d-block">View Detail</a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection