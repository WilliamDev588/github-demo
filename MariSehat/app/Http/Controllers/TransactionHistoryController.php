<?php

namespace App\Http\Controllers;

use App\Models\TransactionHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionHistoryController extends Controller
{
    public function checkout(Request $request){
        $rules = [
            'number' => 'required|numeric|digits:16',
            'note' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $date = Carbon::now();

        $txHistory = new TransactionHistory();
        $txHistory->date = $date->toDateString();
        $txHistory->cardNumber = $request->number;
        $txHistory->note = $request->note;
        $txHistory->total = 0;
        $txHistory->user_id = auth()->user()->id;

        $txHistory->save();
        foreach (session('cart') as $id => $details){
            $txDetail = new TransactionDetail();
            $txDetail->name = $details['name'];
            $txDetail->price = $details['price'];
            $txDetail->quantity = $details['quantity'];
            $txDetail->subTotal = $details['price'] * $details['quantity'];

            $txHistory->total += $txDetail->subTotal;

            $txDetail->txHistory_id = $txHistory->id;

            $txDetail->save();

        }
        if($txHistory->total <= 0){
            return redirect()->back()->withErrors('There is no item on cart');
        }
        $txHistory->save();
        session()->forget('cart');

        return redirect('/home')->with('success', 'Thankyou for choosing us!');
    }

    public function txHistory(){
        if(auth()->user()->role == 'Admin')
            $txHistory = TransactionHistory::all();
        else
            $txHistory = TransactionHistory::where('user_id', 'LIKE', auth()->user()->id)->get();

        return view('TransactionHistory')->with('txHistory', $txHistory);
    }
}
