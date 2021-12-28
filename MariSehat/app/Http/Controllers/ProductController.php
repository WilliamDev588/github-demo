<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function addFurniture(Request  $request){
        $rules = [
            'name' => 'required|max:15|unique:furniture,name',
            'price' => 'required|numeric|between:5000,10000000',
            'type' => 'required',
            'color' => 'required',
            'image' => 'required|mimes:jpeg, png, jpg'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $furniture = new Furniture();
        $furniture->name = $request->name;
        $furniture->price = $request->price;
        $furniture->type = $request->type;
        $furniture->color = $request->color;

        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/image/furnitures', $file, $imageName);

        $furniture->image = 'image/furnitures/'.$imageName;


        $furniture->save();
        return redirect('/login');
    }
}
