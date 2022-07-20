<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function reg(Request $request){
    if(Auth::check()){
        return redirect('user.private');
    }

    $validateFields=$request->validate([
        'name'=>'required|min:2|max:50',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:4|max:20'
    ]);




        $review = new UserModel();
        $review->name=$request->input('name');
        $review->email=$request->input('email');
        $review->password=Hash::make($request->input('password'));

        $review->save();



    $user = User::create($validateFields);
    if($user){
        Auth::login($user);
        return redirect('private');
    }

   // return redirect('user.login')->withError([
   //     'formError'=>'Произошла ошибка при сохранении пользователя'
   // ]);

  }
}
