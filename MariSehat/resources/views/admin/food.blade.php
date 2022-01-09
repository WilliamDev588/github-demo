@extends('layouts.adminmain')
@section('container')
<div class="row g-3 my-2">
<div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Food</div>
                <div class="card-body"></div>
            <form action="{{route('store.food')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Food Name</label>
                    <input type="text" name="foodName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('foodName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                     
                </div>
                <div class="form-group">
                    
                    <label for="exampleInputEmail2" class="form-label">Food Calorie</label>
                    <input type="text" name="foodCalorie" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('foodCalorie')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                       
                </div>
                <div class="form-group">
                    
                    <label for="exampleInputEmail3" class="form-label">Food Information</label>
                    <input type="text" name="foodInformation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('foodInformation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Food Image</label>
                    <input type="file" name="foodImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('foodImage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Food</button>
                </form>
                </div>
            </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Television</td>
                                    <td>Jonny</td>
                                    <td>$1200</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Laptop</td>
                                    <td>Kenny</td>
                                    <td>$750</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cell Phone</td>
                                    <td>Jenny</td>
                                    <td>$600</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Fridge</td>
                                    <td>Killy</td>
                                    <td>$300</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Books</td>
                                    <td>Filly</td>
                                    <td>$120</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Gold</td>
                                    <td>Bumbo</td>
                                    <td>$1800</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Pen</td>
                                    <td>Bilbo</td>
                                    <td>$75</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Notebook</td>
                                    <td>Frodo</td>
                                    <td>$36</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Dress</td>
                                    <td>Kimo</td>
                                    <td>$255</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Paint</td>
                                    <td>Zico</td>
                                    <td>$434</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Carpet</td>
                                    <td>Jeco</td>
                                    <td>$1236</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Food</td>
                                    <td>Haso</td>
                                    <td>$422</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
<div class="py-12">
        <div class="container">
            <div class="row">
            <div class="col-md-8">
            <div class="card">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>
            @endif
                <div class="card-header">All Foods</div>
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Food Calorie</th>
                    <th scope="col">Food Description</th>
                    <th scope="col">Food Image</th>
                    <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- @php($i = 1) -->
                    @foreach($foods as $food)
                    <tr>
                    <th scope="row">{{$foods->firstItem()+$loop->index}}</th>
                    <td>{{$food->foodName}}</td>
                    <td>{{$food->foodCalorie}}</td>
                    <td>{{$food->foodInformation}}</td>
                    <td><img src="{{asset($food->foodImage)}}" style="height:70px; width:100px"></td>
                    <td>
                        <a href="{{url('food/edit/'.$food->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{url('food/delete/'.$food->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{$foods->links('pagination::bootstrap-4')}}
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection