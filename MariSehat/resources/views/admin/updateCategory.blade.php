@extends('layouts.updatepage')
@section('container')

<body>
<div class="d-flex justify-content-center row g-3 my-3 mb-5">
    <h3 class="d-flex justify-content-center">Update Category</h3>
    <div class="col-md-4">
                <div class="card">
                    <form action="/updateCategory/{{$category->id}}" method="POST" enctype="multipart/form-data" class="p-3">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Category Name</label>
                            <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$category->category}}">
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mt-3">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
