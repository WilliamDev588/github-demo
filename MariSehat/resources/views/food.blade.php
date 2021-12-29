<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

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
           
                    </tr>
                    @endforeach
                </tbody>
                </table>
                {{$foods->links('pagination::bootstrap-4')}}
                </div>
            </div>
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>