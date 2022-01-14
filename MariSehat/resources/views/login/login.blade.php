@extends('layouts.main')
@section('container')

<section class="vh-100" style="background-color: #FAF7EE;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 d-flex justify-content-center align-items-center p-lg-4">
            <div class="col-md-6 col-lg-5 d-none d-md-block ">
            
              <img src="Loginn/LoginImg.png" alt="LoginImg" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4  text-black"> 

                <form action="/loginSubmit" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="d-flex align-items-center mb-3 pb-1 d-flex justify-content-center">
                    <img src="header\Health Plus Logo.png" alt="Logo" style="width:40px;" class="me-2">
                    <span class="h1 fw-bold mb-0">MariSehat</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-3">

                    <input type="text" id="InputUsername" placeholder="Username" name="username" class="form-control form-control-lg" />

                  </div>

                  <div class="form-outline mb-3">
                    <input type="password" id="inputPassword3" name="password" placeholder="Password" class="form-control form-control-lg" />

                  </div>

                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>
                  <p  style="color: #393f81;">Don't have an account? <a href="/register" style="color: #393f81;">Register here</a></p>
                  <div class="errorMes d-flex justify-content-center">
                    @if($errors->any())
                    <i class="text-danger text-center">{{$errors->first()}}</i>
                    @endif
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