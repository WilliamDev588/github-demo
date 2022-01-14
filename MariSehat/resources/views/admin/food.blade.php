@extends('layouts.adminmain')
@section('container')

<div class="row my-5">
    <h3 class="fs-4 mb-3">Food List</h3>
    <div class="col">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
        <table class="table bg-white rounded shadow-sm  table-hover">
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
                @foreach($foods as $food)
                <tr>
                    <th scope="row">{{$foods->firstItem()+$loop->index}}</th>
                    <td>{{$food->foodName}}</td>
                    <td>{{$food->foodCalorie}}</td>
                    <td>{{$food->foodInformation}}</td>
                    <td><img src="{{asset($food->foodImage)}}" style="height:70px; width:100px"></td>
                    <td>
                        
                        <a href="{{url('food/edit/'.$food->id)}}" class="btn btn-info align-self-center"><i class="fas fa-edit me-2"></i>Update</a>
                        <a href="{{url('food/delete/'.$food->id)}}" class="btn btn-danger  align-self-center" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt me-2"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$foods->links('pagination::bootstrap-4')}}
    </div>
</div>

<div class="row g-3 my-3 mb-5">
    <h3 class="fs-4">Add Food</h3>
    <div class="col-md-4">
        <div class="card">
            <form action="{{route('store.food')}}" method="POST" enctype="multipart/form-data" class="p-3">
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
                <button type="submit" class="btn btn-primary mt-3">Add Food</button>
            </form>
        </div>
    </div>
</div>


</div>
</div>
@endsection