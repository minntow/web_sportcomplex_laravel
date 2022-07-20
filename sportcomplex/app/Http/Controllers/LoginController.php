<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function log(Request $request){

        $validateFields=$request->validate([
               'email'=>'required|email',
               'password'=>'required'
           ]);

        if(Auth::check()){
            return redirect('private');
        }

        $formFields = $request->only(['email','password']);

        if(Auth::attempt($formFields)){
            return redirect('private');
        }

        return redirect('login');
    }

}
