<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    public function sign_in(Request $request){
        $username = $request->username;
        $password = $request->password;

        $user = User::where([['username', '=', $username], ['password', '=', MD5($password)]])->get();

        if(count($user) > 0){
            $data = [
                'user_id' => $user[0]['user_id'],
                'username' => $user[0]['username']
            ];
            Session::put('user', $data);
            return redirect('/admin');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
