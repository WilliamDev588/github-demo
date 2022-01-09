@extends('layouts.main')
@section('container')
 <content>

        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-10 col-md-8 mx-auto">
              <h1 class="fw-light">Product Details</h1>
              <img src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt="Image" width="850" height="600" style="vertical-align:middle;margin:20px 50px">
              <p class="card-text">{{$product->name}}</p>
              <p class="lead text-muted">{{$product->description}}<p>
                <a href="#" class="btn btn-primary my-2">Add to Cart</a>
              </p>
            </div>
          </div>
        </section>

        <div class="album py-5 bg-light">
          <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/kb.jpg" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">Kettlebell</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/bcaa.jpg" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">BCAA</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/mat.jpg" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">Yoga Mat</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/whey2.jpg" alt="Image" width="200px" height="200px">
                  <div class="card-body">
                    <p class="card-text">Whey Protein</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/granola.jpg" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">Granola with Cashews</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/bar2.jpg" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">Protein Bar</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/granolabites.jpg" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">Granola Bites</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm">
                    <img src="produk/casein.png" alt="Image" width="200px">
                  <div class="card-body">
                    <p class="card-text">Casein</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View Details</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

                </div>
              </div>
            </div>
          </div>
        </div>

    </content>


    @endsection