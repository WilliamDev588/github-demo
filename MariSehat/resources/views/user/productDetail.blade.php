@extends('layouts.main')
@section('container')
 <content>
        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
              <h1 class="fw-light">Product Details</h1> 
              <img src="{{asset($product->image)}}" alt="Image" width="850" height="600" style="vertical-align:middle;margin:20px 50px">
              <p class="card-text">{{$product->name}}</p>
              <p class="lead text-muted">{{$product->description}}<p>
                <a href="/addToCart/{{$product->id}}" class="btn btn-primary my-2">Add to Cart</a>
              </p>
            </div>
          </div>
        </section>
    </content>


    @endsection