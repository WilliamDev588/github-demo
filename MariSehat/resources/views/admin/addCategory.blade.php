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
                    <div class="card-header">Category</div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- @php($i = 1) -->
                        @foreach($category as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->category}}</td>
                                <td>
                                    <a href="/updateCategory/{{$category->id}}" class="btn btn-primary">Update</a>
                                    <a href="/deleteCategory/{{$category->id}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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
                    <div class="card-header">Add Category</div>
                    <div class="card-body"></div>
                    <form action="/addCategory" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Category Name</label>
                            <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
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