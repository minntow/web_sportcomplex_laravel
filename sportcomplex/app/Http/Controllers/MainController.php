<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use App\Models\AbonementModel;

class MainController extends Controller
{
    public function treneri(){
    return view('/treneri');
    }

    public function otzivi_check(Request $request) {
    $valid=$request->validate([
    'email'=>'required|min:4|max:50',
    'subject'=>'required|min:4|max:100',
    'message'=>'required|min:15|max:500']);

    $review =new ContactModel();
    $review->email= $request->input('email');
    $review->subject= $request->input('subject');
    $review->message= $request->input('message');

    $review->save();

    return redirect('otzivi')->with('success', 'Отзыв успешно добавлен');
    }

    public function otzivi(){
    $review = new ContactModel();
    return view('/otzivi',['review'=>$review->all()]);
    }

}

