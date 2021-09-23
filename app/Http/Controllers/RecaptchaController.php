<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecaptchaController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(){
       

        request()->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
        return request()->all();
    }
}
