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
        <h3 class="card-header text-white bg-primary text-center"><i class="fa fa-book"></i>JOIN US</h3>
        <div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" name="nim" class="form-control" id="staticEmail" placeholder="193xxxxxxxxx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::guest())
            <a href="{{URL('/register')}}" class="btn btn-lg btn-info pt-3 pb-3">Register</a>
        @endif
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
    </div>
@endsection
