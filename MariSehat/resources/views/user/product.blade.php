@extends('layouts.main')
@section('container')
<link href="produk/produk.css" rel="stylesheet">


</header>

<section class="page-section">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 blog-form">

				<h2 class="blog-sidebar-title"><b>Categories</b></h2>
				<hr />
				@foreach($category as $cat)
				<p class="blog-sidebar-list"><b><span class="list-icon"> > </span>{{$cat->category}}</b></p>
				@endforeach

			</div>
			<!--END  <div class="col-lg-3 blog-form">-->

			<div class="col-lg-9">
				<div class="row">
					<div class="input-group pr-5">
						<input type="text" class="form-control" placeholder="Search"">
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
								<div class="product">
									<div class="product-content">
										<div class="product-img">
											<img src="{{Storage::url($product->image) }}" class="product-image">
										</div>

										<div class="product-btns">
										<a href="/addToCart/{{$product->id}}">
											<button type="button" class="btn-cart">Add to Cart
												<span><i class="fas fa-plus"></i></span>
												</a>
											</button>
											
												<button type="button" class="btn-view"> View Item
													<span><i class="fas fa-shopping-cart"></i></span>
										
											</button>
										</div>
									</div>
								</div>
								<h5 class="card-title"><b>{{$product->name}}</b></h5>
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