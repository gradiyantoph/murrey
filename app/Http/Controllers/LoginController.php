<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }
    public function index()
    {
        return view('auth.login');
    }
	public function login(Request $request) {
		if (Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')])) {
			return redirect('/home');
		}
		else {
			return redirect('/login')->with('message','salah username atau salah password');
		}
	}
	public function logout() {
		Auth::logout();
		return Redirect::to('login')->with('message','berhasil logout');
	}
}
