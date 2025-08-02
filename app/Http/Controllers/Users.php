<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\My_user;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{

    public function SignUp(Request $request){

        $validate = $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:my_users,email',
            'password'=>'required|string|min:4|confirmed',
        ],
        [
            'name.string'=>'enter a valid name',
            'email.email'=>'enter a valid email',
            'email.unique'=>'email already exists',
            'password.confirmed' => 'password does not match',
            'password.min' => 'password must have 4 letter',
        ]
        );

        $User = new My_user();
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = Hash::make($request->input('password'));

        if($User->save()){
            return redirect('/')->with('account created');
        }else{
            dump('try again');
        }
    }

    public function Login(Request $request){
        $User = My_user::where('email' , $request->input('email'))->first();

        if($User && Hash::check($request->input('password'), $User->password)){
            return redirect()->route('User-dashboard')->with('logged in');
        }else{
            dump('email or password is not correct');
        }
    }

}
