<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
@if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

    <div class="py-12">
        <div class="container">
            <div class="row">
            
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Food</div>
                <div class="card-body"></div>
            <form action="{{url('food/update/'.$foods->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <img src="{{asset($foods->foodImage)}}" style="width:400px"; height="200px">
                </div>
                <button type="submit" class="btn btn-primary">Update Food</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>