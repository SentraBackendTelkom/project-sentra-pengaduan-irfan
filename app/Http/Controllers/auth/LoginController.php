<?php

namespace App\Http\Controllers\auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view(){
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::whereUsername($request->username)->first();

        if($user){
            if(User::wherePassword($request->password)->first()){
                return redirect('/');
            }
        }else{
            return redirect('login');
        }
    }
}
