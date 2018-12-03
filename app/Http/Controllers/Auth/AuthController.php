<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){

    	return view('auth.auth.login');
    }

    public function postLogin(Request $request){
    	$username = trim($request->username);
    	$password = $request->password; 

    	if (Auth::attempt(['username' => $username, 'password' => $password])) {
    		return redirect()->route('admin.index.index');
    	} else {
    		return redirect()->route('auth.auth.login')->with('msg', 'Sai Usernam hoặc Password!');
    	}
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('auth.auth.login');
    }
}
