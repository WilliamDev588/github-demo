<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Furniture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function addProductPage(){
        $product = Product::all();
        $category = Category::all();
        return view('/addProduct')->with('product', $product)->with('category', $category);

    }
    public function addProducts(Request  $request){
        $rules = [
            'name' => 'required|max:15|unique:products,name',
            'category' => 'required',
            'price' => 'required|numeric|between:5000,10000000',
            'description' => 'required',
            'image' => 'required|mimes:jpeg, png, jpg'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->description = $request->description;

        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/image/products', $file, $imageName);


        $product->image = 'image/products/'.$imageName;
//        dd($product);
        $product->save();

        return redirect('/addProduct');
    }
}
