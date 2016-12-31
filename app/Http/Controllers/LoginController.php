<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
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
	public function login(LoginRequest $request) {
		if(Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')])) 
        {
			if(Auth::user()->level == 'Cashier')
            {
                return redirect('/home');
            }
            return redirect('/home');
		}
		else 
        {
			return redirect('/login')->with([
                'message' => 'Salah username atau salah password.',
                'alert-type' => 'alert-danger',
            ]);
		}
	}
	public function logout() {
		Auth::logout();
		return redirect('login')
            ->with([
                'message' => 'Berhasil keluar.',
                'alert-type' => 'alert-success',
            ]);
	}
}
