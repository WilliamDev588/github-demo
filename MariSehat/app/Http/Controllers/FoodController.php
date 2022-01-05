<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    public function AllFood(){
        $foods = Food::latest()->paginate(5);
        return view('admin.food', compact('foods'));

    }
    public function AllFood2(){
        $foods = Food::latest()->paginate(5);
        return view('user.caloriesCalculator', compact('foods'));

    }
    public function AllFoodTes(){
        $foods = Food::latest()->paginate(5);

        return view('tes', compact('foods'));

    }
    public function AllFoodTes2(){
        $foods = Food::latest()->paginate(5);

        return view('tes2', compact('foods'));

    }
    public function AddFood(Request $request){
        $validated = $request->validate([
            'foodName' => 'required|unique:food|max:255',
            'foodCalorie' => 'required|numeric|between:0,99.99',
            'foodInformation' => 'required|max:255',
            'foodImage' => 'required|mimes:jpg,jpeg,png',

        ],
        [
            'foodName.required' => 'Please input food name',
            'foodCalorie.required' => 'Please input food calorie',
            'foodInformation.required' => 'Please input food information',
            'foodCalorie.between'=>'The food calorie must be between 0 and 100',
            'foodName.max' => 'Food name should be less than 255',
            'foodInformation.max' => 'Food information should be less than 255',

        ]
        );
        $foodImage = $request->file('foodImage');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($foodImage->getClientOriginalExtension());
        $imgName = $nameGen.'.'.$imgExt;
        $upLocation = 'header/';
        $lastImg = $upLocation.$imgName;
        $foodImage->move( $upLocation,$imgName);

        Food::insert([
            'foodName'=> $request -> foodName,
            //  'user_id' => Auth::user() ->id,
            'foodCalorie'=> $request -> foodCalorie,
            'foodInformation'=> $request -> foodInformation,
            'foodImage' => $lastImg,


        ]);

        // $category =  new Category;
        // $category->category_name = $request -> category_name;
        // $category->user_id = Auth::user() ->id;
        // $category->save();

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // DB::table('categories')->insert($data);

        return Redirect()->back()->with('success','Food Inserted Succesfully');
    }
    

    public function Edit($id){
        $foods = Food::find($id);
        return view('admin.foodEdit', compact('foods'));
    }

    public function Update(Request $request, $id){
        $validated = $request->validate([
            'foodName' => 'required|max:255',
            'foodCalorie' => 'required|numeric|between:0,99.99',
            'foodInformation' => 'required|max:255',

        ],
        [
            'foodName.required' => 'Please input food name',
            'foodCalorie.required' => 'Please input food calorie',
            'foodInformation.required' => 'Please input food information',
            'foodCalorie.between'=>'The food calorie must be between 0 and 100',
            'foodName.max' => 'Food name should be less than 255',
            'foodInformation.max' => 'Food information should be less than 255',

        ]
        );

        $oldImage = $request->oldImage;

        $foodImage = $request->file('foodImage');
        if($foodImage){
            $nameGen = hexdec(uniqid());
            $imgExt = strtolower($foodImage->getClientOriginalExtension());
            $imgName = $nameGen.'.'.$imgExt;
            $upLocation = 'header/';
            $lastImg = $upLocation.$imgName;
            $foodImage->move($upLocation,$imgName);
    
            unlink($oldImage);
            Food::find($id)->update([
                'foodName' => $request ->foodName,
                'foodCalorie'=> $request -> foodCalorie,
                'foodInformation'=> $request -> foodInformation,
                'foodImage' => $lastImg
            ]);
            return Redirect()->route('all.food')->with('success','food updated successfully');
        }else{
            Food::find($id)->update([
                'foodName' => $request ->foodName,
                'foodCalorie'=> $request -> foodCalorie,
                'foodInformation'=> $request -> foodInformation
            ]);
            return Redirect()->route('all.food')->with('success','food updated successfully');
        }
        
    }
    public function Delete($id){
        $image = Food::find($id);
        $oldImage = $image->foodImage;
        unlink($oldImage);
        Food::find($id)->delete();
        return Redirect()->back()->with('success','food deleted successfully');
    }

    public function CalculateCalorie(Request $request){
        $ID = $request->foodName;
        echo $ID;
    }

    public function findFoodName(Request $request){
        $data = Food::select('foodName','id')->where('id', $request->id)->take(100)->get();
        return response()->json($data);
    }
    public function findFoodCalorie(Request $request){
	
		//it will get price if its id match with product id
		$p=Food::select('foodCalorie')->where('id',$request->id)->first();
		
    	return response()->json($p);
	}

    public function GetFoodCalorie(Request $request){
        // echo json_encode(DB::table('food')->where('id', $id)->value('foodCalorie'));
        $p=Food::select('food')->where('id',$request->id)->first();

        return response()->json($p);
    }

}
