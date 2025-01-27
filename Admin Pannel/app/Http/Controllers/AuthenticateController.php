<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified'])->except('index');
    }

    public function index(Request $request){
        /*
        if (Auth::user()){
            return view('index');
        }else{
            return view('auth.login');
        }
        */
        return view('pages.config.home.home');

    }


    




}
