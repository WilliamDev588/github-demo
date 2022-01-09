@extends('layouts.adminmain')
@section('container')
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
                    <div class="card-header">Products</div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- @php($i = 1) -->
                        @foreach($product as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->category}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td><img src="{{Storage::url($product->image)}}" style="height:70px; width:100px"></td>
                                <td>
                                    <a href="/updateProduct/{{$product->id}}" class="btn btn-primary">Update</a>
                                    <a href="/deleteProduct/{{$product->id}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
{{--                    {{$product->links('pagination::bootstrap-4')}}--}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Product</div>
                    <div class="card-body"></div>
                    <form action="/addProduct" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('foodName')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2" class="form-label">Product Category</label>
                            <select class="custom-select p-2  rounded" name="category" id="inlineFormCustomSelectPref" style="width: 100%">
                                <option value="" hidden>Choose Category</option>
                                @for($i = 0; $i < count($category); $i++)
                                    <option value="{{$category[$i]->id}}">{{$category[$i]->category}}</option>
                                @endfor
                            </select>
                            @error('foodCalorie')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">

                            <label for="exampleInputEmail3" class="form-label">Product price</label>
                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('foodInformation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">

                            <label for="exampleInputEmail3" class="form-label">Product description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('foodInformation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('foodImage')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
                <div class="errorMes d-flex flex-column justify-content-center">
                    @if($errors->any())
                        @if($errors->any())
                            <i class="text-danger text-center mt-1">{{$errors->first()}}</i>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection