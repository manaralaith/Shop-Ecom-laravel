<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{
    //
    function login(Request $req) {
        // return $req->input();
        // {"_token":"YenAjF8ksqQk00Hb7vcmgKxVR7eJuqUWqiSDtNLP","email":"manar@gmail.com","password":"manar123"}

        // return User::where(['email'=>$req->email])->first();
        //  just for user inlogen

        //{"id":3,"name":"manar","email":"manar@gmail.com","created_at":null,"updated_at":null}
        // Models/User.php ----
        // protected $hidden = [
        // 'password', => remove for show
        // 'remember_token',
        // ];
        // {"id":3,"name":"manar","email":"manar@gmail.com","password":"$2y$10$aGtNQYHfJXF5MhlWaQ9y5.2lAoc50DfBs1mLSgpbwS676VLpnP1ZC","created_at":null,"updated_at":null}

        $user = User::where(['email'=>$req->email])->first();  // for any user

        if(! $user || !Hash::check($req->password, $user->password)) {
            return "Username Or Password Is Not Matched";
        }else {
            $req->session()->put('user', $user);
            return redirect('/');
        }


    }
}
