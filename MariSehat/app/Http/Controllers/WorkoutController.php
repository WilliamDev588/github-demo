<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function AllWorkout(){
        $workouts = Workout::latest()->paginate(5);
        return view('admin.workout', compact('workouts'));

    }
    public function AllWorkout2(){
        $workouts = Workout::latest()->paginate(5);
        return view('user.workoutCalculator', compact('workouts'));

    }
    public function AddWorkout(Request $request){
        $validated = $request->validate([
            'workoutName' => 'required|unique:workouts|max:255',
            'workoutCalorie' => 'required|numeric|between:0,99.99',
            'workoutInformation' => 'required|max:255',
            'workoutImage' => 'required|mimes:jpg,jpeg,png',

        ],
        [
            'workoutName.required' => 'Please input workout name',
            'workoutCalorie.required' => 'Please input workout calorie',
            'workoutInformation.required' => 'Please input workout information',
            'workoutCalorie.between'=>'The workout calorie must be between 0 and 100',
            'workoutName.max' => 'Workout name should be less than 255',
            'workoutInformation.max' => 'Workout information should be less than 255',

        ]
        );
        $workoutImage = $request->file('workoutImage');
        $nameGen = hexdec(uniqid());
        $imgExt = strtolower($workoutImage->getClientOriginalExtension());
        $imgName = $nameGen.'.'.$imgExt;
        $upLocation = 'header/';
        $lastImg = $upLocation.$imgName;
        $workoutImage->move( $upLocation,$imgName);

        Workout::insert([
            'workoutName'=> $request -> workoutName,
            //  'user_id' => Auth::user() ->id,
            'workoutCalorie'=> $request -> workoutCalorie,
            'workoutInformation'=> $request -> workoutInformation,
            'workoutImage' => $lastImg,


        ]);

     

        return Redirect()->back()->with('success','Workout Inserted Succesfully');
    }
    public function Edit($id){
        $workouts = Workout::find($id);
        return view('admin.workoutEdit', compact('workouts'));
    }

    public function Update(Request $request, $id){
        $validated = $request->validate([
            'workoutName' => 'required|max:255',
            'workoutCalorie' => 'required|numeric|between:0,99.99',
            'workoutInformation' => 'required|max:255',

        ],
        [
            'workoutName.required' => 'Please input workout name',
            'workoutCalorie.required' => 'Please input workout calorie',
            'workoutInformation.required' => 'Please input workout information',
            'workoutCalorie.between'=>'The workout calorie must be between 0 and 100',
            'workoutName.max' => 'Workout name should be less than 255',
            'workoutInformation.max' => 'Workout information should be less than 255',

        ]
        );

        $oldImage = $request->oldImage;

        $workoutImage = $request->file('workoutImage');
        if($workoutImage){
            $nameGen = hexdec(uniqid());
            $imgExt = strtolower($workoutImage->getClientOriginalExtension());
            $imgName = $nameGen.'.'.$imgExt;
            $upLocation = 'header/';
            $lastImg = $upLocation.$imgName;
            $workoutImage->move($upLocation,$imgName);
    
            unlink($oldImage);
            Workout::find($id)->update([
                'workoutName' => $request ->workoutName,
                'workoutCalorie'=> $request -> workoutCalorie,
                'workoutInformation'=> $request -> workoutInformation,
                'workoutImage' => $lastImg
            ]);
            return Redirect()->route('all.workout')->with('success','workout updated successfully');
        }else{
            Workout::find($id)->update([
                'workoutName' => $request ->workoutName,
                'workoutCalorie'=> $request -> workoutCalorie,
                'workoutInformation'=> $request -> workoutInformation
            ]);
            return Redirect()->route('all.workout')->with('success','workout updated successfully');
        }
        
    }
    public function Delete($id){
        $image = Workout::find($id);
        $oldImage = $image->workoutImage;
        unlink($oldImage);
        Workout::find($id)->delete();
        return Redirect()->back()->with('success','workout deleted successfully');
    }
}
