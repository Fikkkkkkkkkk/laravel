<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function registerPost(Request $request){
        $user = new User();

        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->primaryEmail = $request->primaryEmail;
        $user->companyName = $request->companyName;
        $user->yearBorn = $request->yearBorn;
        $user->fulltimeExp = $request->fulltimeExp;
        $user->yearExp = $request->yearExp;
        $user->descBigdata = $request->descBigdata;
        $user->orgFocus = $request->orgFocus;
        $user->areaFocus = $request->areaFocus;
        $user->password = Hash::make($request->password);
        $user->confirmPassword = Hash::make($request->confirmPassword);
        $user->secQuestion = $request->secQuestion;
        $user->secAnswer = $request->secAnswer;


        $user->save();

        return back()->with("success", "registration successfully");
    }

    public function login(){
        return view ('login');
    }

    public function loginPost(){
        return view ('welcome');
    }
}
