@extends('layouts.adminmain')
@section('container')

<div class="row my-5">
    <h3 class="fs-4 mb-3">Workout List</h3>
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
                    <th scope="col">Workout Name</th>
                    <th scope="col">Calorie Burned</th>
                    <th scope="col">Workout Description</th>
                    <th scope="col">Workout Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($workouts as $workout)
                <tr>
                    <th scope="row">{{$workouts->firstItem()+$loop->index}}</th>
                    <td>{{$workout->workoutName}}</td>
                    <td>{{$workout->workoutCalorie}}</td>
                    <td>{{$workout->workoutInformation}}</td>
                    <td><img src="{{asset($workout->workoutImage)}}" style="height:70px; width:100px"></td>
                    <td>
                        <a href="{{url('workout/edit/'.$workout->id)}}" class="btn btn-info"><i class="fas fa-edit me-2"></i>Update</a>
                        <a href="{{url('workout/delete/'.$workout->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt me-2"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$workouts->links('pagination::bootstrap-4')}}
    </div>
</div>

<div class="row g-3 my-3 mb-5">
    <h3 class="fs-4">Add Workout</h3>
    <div class="col-md-4">
        <div class="card">
        <form action="{{route('store.workout')}}" method="POST" enctype="multipart/form-data" class="p-3">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Workout Name</label>
                            <input type="text" name="workoutName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('workoutName')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group">

                            <label for="exampleInputEmail2" class="form-label">Calorie Burned</label>
                            <input type="text" name="workoutCalorie" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('workoutCalorie')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="form-group">

                            <label for="exampleInputEmail3" class="form-label">Workout Information</label>
                            <input type="text" name="workoutInformation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('workoutInformation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Workout Image</label>
                            <input type="file" name="workoutImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('workoutImage')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Add Workout</button>
                    </form>
            </form>
        </div>
    </div>
</div>


</div>
</div>

@endsection