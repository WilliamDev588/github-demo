@extends('layouts.main')
@section('container')
<link href="./produk/produk.css" rel="stylesheet">
<section class="vh-100" style="background-color: #FCECE8;">
<div class="text-center py-4">
<h2 >Our Products</h2>
</div>
<!-- List  -->
<div class="row w-100">
  <div class="col-md-2">
    <ul class="list-group ml-2 border rounded-3 border-dark">
      <li class="list-group-item">Kategori Produk</li>
      <li class="list-group-item">A</li>
      <li class="list-group-item">B</li>
      <li class="list-group-item">C</li>
      <li class="list-group-item">D</li>
    </ul>
  </div>
  <!-- List -->
  <div class="col-md-10">

    <section class="section-products">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-8 col-lg-6">
          </div>
        </div>
        <div class="row">
          <!-- Single Product -->
          <div class="card col-md-6 col-lg-4 col-xl-3 rounded-3 shadow p-3 mb-5 bg-body rounded">
            <div id="product-1" class="single-product">
              <div class="part-1">
                <img class="card-img-top mt-3" src="produk/dumbell.jpg" alt="">
                <ul>
                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                <li><a href="/home"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
              </div>
              <div class="part-2">
                <h3 class="product-title">Dumbell</h3>
                <h4 class="product-price">Rp.100.000</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
  </div>
</div>
</div>
</section>
</section>






























<!-- <h4 class="text-center font-weight-bold mt-4">Produk Terbaru</h4>
<div class="row mx-auto">
<div class="card mr-2 ml-2 " style="width: 18rem;">
  <img src="header/photo-1521805103424-d8f8430e8933.jpg" class="card-img-top mt-2" alt="...">
  <div class="card-body">
    <h5 class="card-title">Barbel</h5>
    <p class="card-text">Buat di angkat</p>
    <a href="#" class="btn btn-primary">Details</a>
    <a href="#" class="btn btn-danger">Rp.300.000</a>
  </div>
</div>

</div> -->

</div>

</div>
@endsection