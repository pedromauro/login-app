<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El email o el password son incorrectos',
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
