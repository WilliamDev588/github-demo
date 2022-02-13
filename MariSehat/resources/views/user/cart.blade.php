@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./cart/style.css" rel="stylesheet">
<div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <div class="container text-white py-5 text-center" style="font-color: #2d3748">
        <h1 class="display-4" style="color: #4a5568">My Shopping Cart</h1>
        {{-- <p class="lead mb-0">Build a fully structred shopping cart page using Bootstrap 4. </p> --}}
    </div>
    <!-- End -->

    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="p-2 px-3 text-uppercase">Product</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Price</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Quantity</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                        <div class="py-2 text-uppercase">Remove</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                        
                                            <img src="{{asset($details['image'])}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$details['name']}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: {{$details['category']}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong>{{$details['price']}}</strong></td>
                                    <td class="border-0 align-middle"><strong>{{$details['quantity']}}</strong></td>
                                    <td class="border-0 align-middle"><a href="/removeCart/{{$id}}" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>
            <form action="/checkout" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Card Number</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Credit Card Number</p>

                            <input type="text" name="number" placeholder="Enter Card Number" class="form-control input-group  border rounded-pill " required />

                        </div>
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Adress & Note</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                            <input type="text" name="note" placeholder="Enter Adress & Note" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                            <ul class="list-unstyled mb-4">
                       
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>Free</strong></li>
                    
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">Rp.{{$total}}</h5>
                                </li>
                            </ul>
                            <button type="submit" class="btn rounded-pill bg-dark " style="width: 20rem; color: white; margin-left:5rem;">Proceed to checkout</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection