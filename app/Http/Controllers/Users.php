<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{

    public function SignUp(){
        $User = new User();
        $User_name = $request->get('name');
        $User_email = $request->get('email');
        $User_password = $request->get('password');

        if($User->save()){
            return redirect('welcome')->with('account created');
        }else{
            dump('try again');
        }
    }

    public function Login(Request $request){
        // 
    }

}
