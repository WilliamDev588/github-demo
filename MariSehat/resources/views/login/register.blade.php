@extends('layouts.main')
@section('container')
<!-- <div class="col-md-5 col-md-offset-3 mx-auto">
<form action="/registSubmit" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<h2 class="text-center">Register</h2>
<div class="form-group row">
    <label for="InputUsername" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="InputUsername" placeholder="Username"  name="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="password"  id="inputPassword3" placeholder="Password">
    </div>
  </div>
      <button type="submit" class="btn btn-block btn-primary">Register</button>
      <br>
    <div class="errorMes d-flex flex-column justify-content-center">
        @if($errors->any())
            @if($errors->any())
                <i class="text-danger text-center mt-1">{{$errors->first()}}</i>
            @endif
        @endif
    </div>
{{--              <a href="{{ route('auth.register') }}">I don't have an account, create new</a>--}}

  </div>
  <br>
</form>
</div> -->

<section class="vh-100" style="background-color: #FAF7EE;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 d-flex justify-content-center align-items-center p-lg-4"">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="Loginn/LoginImg.png" alt="LoginImg" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4  text-black">

                <form action="/registSubmit" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="d-flex align-items-center mb-3 pb-1 d-flex justify-content-center">
                    <img src="header\Health Plus Logo.png" alt="Logo" style="width:40px;" class="me-2">
                    <span class="h1 fw-bold mb-0">MariSehat</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <div class="form-outline mb-3">

                    <input type="text" id="InputUsername" placeholder="Username" name="username" class="form-control form-control-lg" />

                  </div>

                  <div class="form-outline mb-3">

                    <input type="email" id="inputEmail3" placeholder="Email" name="email" class="form-control form-control-lg" />

                  </div>

                  <div class="form-outline mb-3">
                    <input type="password" id="inputPassword3" name="password" placeholder="Password" class="form-control form-control-lg" />

                  </div>

                  <div class="pt-1 mb-4">

                    <button type="submit" class="btn btn-dark btn-lg btn-block" type="button">Register</button>
                  </div>
                  <p style="color: #393f81;">Already have an account? <a href="/login" style="color: #393f81;">Login Here</a></p>
                  <div class="errorMes d-flex flex-column justify-content-center">
                    @if($errors->any())
                    @if($errors->any())
                    <i class="text-danger text-center mt-1">{{$errors->first()}}</i>
                    @endif
                    @endif
                  </div>
              </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection