<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategoryPage()
    {
        $category = Category::all();
        return view('admin.addCategory')->with('category', $category);
    }
    public function addCategory(Request  $request)
    {
        $rules = [
            'category' => 'required|unique:categories,category'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $category = new Category();
        $category->category = $request->category;

        $category->save();
        return Redirect()->back()->with('success', 'Category Inserted Succesfully');
    }
    public function updateCategoryPage($id)
    {
        //        $product = Product::find($id);
        $category = Category::find($id);
        return view('admin.updateCategory')->with('category', $category);
    }

    public function updateCategory(Request $request, $id)
    {
        $rules = [
            'category' => 'required|unique:categories,category'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $category = Category::find($id);
        if ($category != null) {
            $category->category = $request->category;

            $category->save();
        } else {
            $category = Category::all();
            return view('admin.addCategory')->with('success', 'Category updated successfully')->with('category', $category);
        }

        $category = Category::all();

        return view('admin.addCategory')->with('success', 'Category updated successfully')->with('category', $category);
    }

    public function Delete($id){
        category::find($id)->delete();
        return Redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function deleteCategory($id)
    {

        category::find($id)->delete();
        return Redirect()->back()->with('success', 'Category deleted successfully');

        // $category = Category::find($id);
        // if($category != null) {
        //     $category->delete();
        // }else{
        //     $category = Category::all();
        //     return view('admin.addCategory')->with('success','Category deleted successfully')->with('category', $category);
        // }

        // $category = Category::all();
        // return view('admin.addCategory')->with('success','Category deleted successfully')->with('category', $category);
    }
}
