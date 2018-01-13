<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">E-Learning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{URL('/lecture/all')}}">Class</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    @if(Auth::guard('dosen')->check())
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::guard('dosen')->user()->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">My Schedule</a>
            <a class="dropdown-item" href="#">Forum</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{URL('/logout')}}">Logout</a>
          </div>
        </li>
      </ul>
    @elseif(Auth::guard('web')->check())
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">My Schedule</a>
            <a class="dropdown-item" href="{{URL('/enroll/all')}}">My Enroll</a>
            <a class="dropdown-item" href="{{URL('/forum/all')}}">Forum</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{URL('/logout')}}">Logout</a>
          </div>
        </li>
      </ul>
    @else
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal">Login</a>
        </li>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{URL('/login')}}" method="post" accept-charset="utf-8">
                @if(session('fail'))
                  <div class="alert alert-danger">
                    <h4>{{session('fail')}}</h4>
                    <span class="ml-auto"><i class="fa fa-close"></i></span>
                  </div>
                @endif

                {{ csrf_field() }}
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
                <div class="modal-footer">
                  <a class="mr-auto" href="">Login As Dosen</a>
                  <button type="submit" class="btn btn-primary ml-auto"><i class="fa fa-sing-in"></i>Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </ul>
    @endif
  </div>
</nav>