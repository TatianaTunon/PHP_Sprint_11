<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class loginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    
    public function logincookie (Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);
        Cookie::queue(Cookie::forget ('name'));
        Cookie::queue(Cookie::make('name', $request->name, 10)); 
        return redirect()->route('empleats.index');
    }

    public function store(){
        return view('auth.registre');
    }

    public function showrecuperacio() {
        return view ('auth/recuperacio');
    }

    public function recuperacio() {
       echo "email enviado";
       //return redirect()->route('auth.login');
    }

  
    
}
