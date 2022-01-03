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
        return view('admin.addProduct')->with('product', $product)->with('category', $category);

    }
    public function addProducts(Request  $request){
        $rules = [
            'name' => 'required|max:15|unique:products,name',
            'category' => 'required',
            'price' => 'required|numeric|between:5000,10000000',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg'
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

    public function updateProductPage($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.updateProduct')->with('product', $product)->with('category', $category);
    }

    public function updateProduct(Request $request, $id){
        $rules = [
            'name' => 'required|max:15|unique:products,name',
            'category' => 'required',
            'price' => 'required|numeric|between:5000,10000000',
            'description' => 'required',
            'image' => 'mimes:jpeg, png, jpg'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = Product::find($id);
        if($product != null) {
            $product->name = $request->name;
            $product->category_id = $request->category;
            $product->price = $request->price;
            $product->description = $request->description;

            if($request->file('image')){
                $file = $request->file('image');
                $imageName = time() . '.' . $file->getClientOriginalExtension();
                Storage::putFileAs('public/image/products', $file, $imageName);

                Storage::delete('public/' . $product->image);

                $product->image = 'image/products' . $imageName;
            }
            $product->save();
        }

        $product = Product::all();
        $category = Category::all();

        return view('admin.addProduct')->with('success','food updated successfully')->with('product', $product)->with('category', $category);
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if($product != null) {
            Storage::delete('pubilc/'.$product->image);

            $product->delete();
        }

        $product = Product::all();
        $category = Category::all();

        return view('admin.addProduct')->with('success','food updated successfully')->with('product', $product)->with('category', $category);
    }

    public function productPage(){
        $product = Product::all();
        $category = Category::all();

        return view('user.product')->with('category', $category)->with('product', $product);
    }
}
