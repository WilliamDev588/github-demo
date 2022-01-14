@extends('layouts.updatepage')
@section('container')


<body>
<div class="d-flex justify-content-center row g-3 my-3 mb-5">
    <h3 class="d-flex justify-content-center">Update Product</h3>
    <div class="col-md-4">
        <div class="card">
                    <form action="/updateProduct/{{$product->id}}" method="POST" enctype="multipart/form-data" class="p-3">
                        @csrf
                        <input type="hidden" name="oldImage" value="{{$product->image}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Update Product Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->name}}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2" class="form-label">Product Category</label>
                            <select class="custom-select p-2  rounded" name="category" id="inlineFormCustomSelectPref" style="width: 100%">
                                <option value="{{$product->category->id}}" hidden>{{$product->category->category}}</option>
                                @for($i = 0; $i < count($category); $i++)
                                    @if($category[$i]->id == $product->category->id)
                                        @continue
                                    @endif
                                    <option value="{{$category[$i]->id}}">{{$category[$i]->category}}</option>
                                @endfor
                            </select>
                            @error('foodCalorie')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Product Price</label>
                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->price}}">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Product Description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->description}}">
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Product Image</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->image}}">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-3">
                            <img src="{{Storage::url($product->image)}}" style="width:400px"; height="200px">
                        </div>
                        <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection