@extends('webSite.layouts.homeapp')
@section('content')

<div class="mainDiv mb-5 mt-5 ">
  <div class="container">
      <div class="row d-flex justify-content-center">
          <div class="col-md-5 col-sm-10 mb-5 mt-5">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div class="mainContent mt-3 mb-5 text-center">
                  <span class="primary-color small-text fw-bold text-center mb-5">Sign In</span>
                  <div class="login-logo d-flex justify-content-center mt-3 mb-5">
                      <img class="logo-size" src="{{ asset('webSite/assets/images/login-logo.png') }}" alt="">
                  </div>
                  <hr>
                  <form action="{{route('LoginStore')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <input type="email" class="form-control bg-light" id="ar" name="email" id="email-input"
                              placeholder="Email">
                      </div>
                      <div class="mb-3">
                          <input type="password" class="form-control bg-light" name="password" id="password"
                              placeholder="Password">
                      </div>
                      <div class="mainButtonsContainer d-flex justify-content-center mt-4">
                          <button class="mainButton mt-3" type="submit">LOGIN</button>
                      </div>
                     
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection