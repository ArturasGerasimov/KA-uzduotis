<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;


class KaController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (Auth::attempt($user_data) &&  $request->get('email') == 'admin@admin.com') {
            return redirect('login/successAdmin');
        } elseif(Auth::attempt($user_data) &&  $request->get('email') == 'user@user.com') {
            return redirect('login/successUser');
        } else {
            return back()->with('error', 'Incorrect credentials');

        }
    }

    function successLogin(Request $request)
    {

            return view('successLogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
