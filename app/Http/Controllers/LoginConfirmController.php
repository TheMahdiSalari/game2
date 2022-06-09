<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginConfirmController extends Controller
{
    public function index()
    {
        return view('login_confirm');
    }

    public function store(Request $request)
    {
        $userValidToken = (Cache::get('user_login_token' . $request->user_id, 'default'));
        $inputToken = $request->token;
        if ($userValidToken != $inputToken) {
            // make error bag
//            $validate = Validator::make($input, $rules, $messages = [
//
//            ]);
            $errors = 'Your code invalid';
            return back()->withErrors($errors);
        }
        return \redirect('dashboard');
    }
}
