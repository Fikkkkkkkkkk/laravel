<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->compName = $request->compName;
        $user->currentJob = $request->currentJob;
        $user->yearBorn = $request->yearBorn;
        $user->fulltimeExp = $request->fulltimeExp;
        $user->ExpData = $request->ExpData;
        $user->descBigdata = $request->descBigdata;
        $user->orgFocus = $request->orgFocus;
        $user->areaFocus = $request->areaFocus;
        $user->password = Hash::make($request->password);
        $user->confirmPassword = Hash::make($request->confirmPassword);
        $user->secQuestion = $request->secQuestion;
        $user->secAnswer = $request->secAnswer;
        
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}