<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategory(Request  $request){
        $rules = [
            'category' => 'required|unique:category,category'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $category = new Category();
        $category->category = $request->category;

        $category->save();
        return redirect()->back();
    }
}
