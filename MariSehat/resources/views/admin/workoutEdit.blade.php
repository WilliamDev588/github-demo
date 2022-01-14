@extends('layouts.updatepage')
@section('container')

<body>
<div class="d-flex justify-content-center row g-3 my-3 mb-5">
    <h3 class="d-flex justify-content-center">Update Workout</h3>
    <div class="col-md-4">
            <div class="card">
            <form action="{{url('workout/update/'.$workouts->id)}}" method="POST" enctype="multipart/form-data" class="p-3">
            @csrf
            <input type="hidden" name="oldImage" value="{{$workouts->workoutImage}}">

                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Update Workout Name</label>
                    <input type="text" name="workoutName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$workouts->workoutName}}">
                        @error('workoutName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group">
                    
                    <label for="exampleInputEmail2" class="form-label">Calorie Burned</label>
                    <input type="text" name="workoutCalorie" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$workouts->workoutCalorie}}">
                        @error('workoutCalorie')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                       
                </div>
                <div class="form-group">
                    
                    <label for="exampleInputEmail3" class="form-label">Workout Information</label>
                    <input type="text" name="workoutInformation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$workouts->workoutInformation}}">
                        @error('workoutInformation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Workout Image</label>
                    <input type="file" name="workoutImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$workouts->workoutImage}}">
                        @error('workoutImage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group my-3">
                    <img src="{{asset($workouts->workoutImage)}}" style="width:400px"; height="200px">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Update Workout</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
    @endsection

