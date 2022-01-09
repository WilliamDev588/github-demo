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
                <div class="card-header">All Workout</div>
            
            <table class="table">
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
                    <!-- @php($i = 1) -->
                    @foreach($workouts as $workout)
                    <tr>
                    <th scope="row">{{$workouts->firstItem()+$loop->index}}</th>
                    <td>{{$workout->workoutName}}</td>
                    <td>{{$workout->workoutCalorie}}</td>
                    <td>{{$workout->workoutInformation}}</td>
                    <td><img src="{{asset($workout->workoutImage)}}" style="height:70px; width:100px"></td>
                    <td>
                        <a href="{{url('workout/edit/'.$workout->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{url('workout/delete/'.$workout->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{$workouts->links('pagination::bootstrap-4')}}


                </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Workout</div>
                <div class="card-body"></div>
            <form action="{{route('store.workout')}}" method="POST" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary">Add Workout</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection