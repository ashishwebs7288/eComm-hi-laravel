<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
public function login(Request $req)
{
    $user= User::where(['email'=>$req->email])->first();
    if(!$user || !Hash::check($req->password, $user->password))
    {
        return "Username and Password not match";
    }
    else
    {
        $req->session()->put('user', $user);
        return redirect('/');
    }
}
}
