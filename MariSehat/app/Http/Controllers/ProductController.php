<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        // $product = new Product();
        // $product->name = $request->name;
        // $product->category_id = $request->category;
        // $product->price = $request->price;
        // $product->description = $request->description;

        $image = $request->file('image');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($image->getClientOriginalExtension());
        $imgName = $nameGen.'.'.$imgExt;
        $upLocation = 'header/';
        $lastImg = $upLocation.$imgName;

        Product::insert([
            'name'=> $request -> name,
            'category_id'=> $request -> category,
            'price'=> $request -> price,
            'description' => $request ->description,
            'image' => $lastImg,


        ]);
        // $image->move( $upLocation,$imgName);


        // $product->image = $lastImg;
        // $product->save();

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
                $image = $request->file('image');
                $nameGen = hexdec(uniqid());
                $imgExt = strtolower($image->getClientOriginalExtension());
                $imgName = $nameGen.'.'.$imgExt;
                $upLocation = 'header/';
                $lastImg = $upLocation.$imgName;

                $image->move( $upLocation,$imgName);

                unlink($image);

                $product->image = $lastImg;
            }
            $product->save();
        }

        $product = Product::all();
        $category = Category::all();

        return redirect('/addProduct')->with('success','Product updated successfully')->with('product', $product)->with('category', $category);
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if($product != null) {
            Storage::delete('pubilc/'.$product->image);

            $product->delete();
        }

        $product = Product::all();
        $category = Category::all();

        return redirect('/addProduct')->with('success','Product updated successfully')->with('product', $product)->with('category', $category);
    }

    public function productPage(){
        $product = Product::all();
        $category = Category::all();

        return view('user.product')->with('category', $category)->with('product', $product);
    }

    public function details($id){
        $product = Product::find($id);
        $products = Product::all();
        return view('user.productDetail')->with('product', $product)->with('products', $products);
    }
}
