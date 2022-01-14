@extends('layouts.adminmain')
@section('container')
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">720</h3>
                    <p class="fs-5">Products</p>
                </div>
                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">4920</h3>
                    <p class="fs-5">Sales</p>
                </div>
                <i
                    class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">3899</h3>
                    <p class="fs-5">Delivery</p>
                </div>
                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">%25</h3>
                    <p class="fs-5">Increase</p>
                </div>
                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <h3 class="fs-4 mb-3">Recent Orders</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                <tr>
                    <th scope="col" width="50">No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Product</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Card Number</th>
                    <th scope="col">Note</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($txHistory as $txHistory)
                    @for($i = 0; $i < count($txHistory->transactiondetail); $i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$txHistory->date}}</td>
                            <td>{{$txHistory->transactiondetail[$i]->name}}</td>
                            <td>{{$txHistory->user->username}}</td>
                            <td>{{$txHistory->transactiondetail[$i]->price}}</td>
                            <td>{{$txHistory->transactiondetail[$i]->quantity}}</td>
                            <td>{{$txHistory->cardNumber}}</td>
                            <td>{{$txHistory->note}}</td>
                            <td>{{$txHistory->total}}</td>
                        </tr>
                    @endfor
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
@endsection
