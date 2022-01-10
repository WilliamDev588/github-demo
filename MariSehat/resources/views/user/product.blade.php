@extends('layouts.main')
@section('container')
<link href="produk/produk.css" rel="stylesheet">
<script defer src="produk/produk.js"></script>


</header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block  w-100 " style="height:25rem; object-fit:cover;" src="produk/a.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block  w-100 " src="produk/b.jpg" style="height:25rem; object-fit:cover;" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 " src="produk/c.jpg" style="height:25rem; object-fit:cover;" alt="Third slide">
					</div>
				</div>
			</div>


<section class="page-section mt-5">

	<div class="container">
		<div class="row">

			<div class="col-lg-3 blog-form">

				<h2 class="blog-sidebar-title"><b>Categories</b></h2>
				<hr />
				<p class="blog-sidebar-list"><a href="#" class="btn" data-filter="all">All</a></p>
				@foreach($category as $cat)
				<p class="blog-sidebar-list"><a href="#" class="btn" data-filter="{{$cat->id}}">{{$cat->category}}</a></p>
				@endforeach

			</div>

			<div class="col-lg-9">
				<div class="row">
					<div class="input-group pr-5">
						<input type="text" id="search" class="form-control" placeholder="Search"">
						<div class=" input-group-append">
						<span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
					</div>
				</div>
				<!-- Sorting by <div class="row"> -->
				<div>&nbsp;</div>

				<div class="row">
					@foreach($product as $product)
					<div class="col-sm-3 col-md-6 col-lg-4 mb-4">
						<div class="card">
							<div class="card-body text-center">
								<div class="product" id="store-products">
									<div class="store-product {{$product->category_id}}">
										<div class="product-content">
											<div class="product-img">
												<img src="{{Storage::url($product->image) }}" class="product-image">
											</div>

											<div class="product-btns">
												<a href="/addToCart/{{$product->id}}">
													<button type="button" class="btn-cart">
														<span class="text-white"><i class="fas fa-plus"></i>Add to Cart</span>
												</a>
												</button>
												<a href="/productDetail/{{$product->id}}">
													<button type="button" class="btn-view">
														<span class="text-dark"> View Item<i class="fas fa-shopping-cart"></i></span>
												</a>
												</button>
											</div>
										</div>
									</div>
								</div>
								<h5 class="product-details card-title"><b>{{$product->name}}</b></h5>
								<p class="card-text small">{{$product->description}}</p>
								<p class="tags">Rp.{{$product->price}}</p>
							</div>

						</div>
					</div>
					@endforeach



				</div>
				<!--END  <div class="col-lg-9">-->

			</div>
		</div>
</section>

</body>

@endsection