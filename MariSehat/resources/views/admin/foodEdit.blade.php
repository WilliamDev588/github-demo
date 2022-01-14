@extends('layouts.updatepage')
@section('container')
<body>
   <div class="d-flex justify-content-center row g-3 my-3 mb-5">
    <h3 class="d-flex justify-content-center">Update Food</h3>
    <div class="col-md-4">
            <div class="card">
            <form action="{{url('food/update/'.$foods->id)}}" method="POST" enctype="multipart/form-data" class="p-3">
            @csrf
            <input type="hidden" name="oldImage" value="{{$foods->foodImage}}">

                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Update Food Name</label>
                    <input type="text" name="foodName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$foods->foodName}}">
                        @error('foodName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group">
                    
                    <label for="exampleInputEmail2" class="form-label">Food Calorie</label>
                    <input type="text" name="foodCalorie" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$foods->foodCalorie}}">
                        @error('foodCalorie')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                       
                </div>
                <div class="form-group">
                    
                    <label for="exampleInputEmail3" class="form-label">Food Information</label>
                    <input type="text" name="foodInformation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$foods->foodInformation}}">
                        @error('foodInformation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Food Image</label>
                    <input type="file" name="foodImage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$foods->foodImage}}">
                        @error('foodImage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group my-3">
                    <img src="{{asset($foods->foodImage)}}" style="width:400px"; height="200px">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Update Food</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    </body>
    @endsection

