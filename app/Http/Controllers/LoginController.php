<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    function login(Request $request) {

        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password]))
        {
            $json['status'] = true;
            $json['message'] = 'login sucess';
        }
        else {
            $json['status'] = false;
            $json['message'] = 'login failed';
        }

        return json_encode($json);

    }
}
