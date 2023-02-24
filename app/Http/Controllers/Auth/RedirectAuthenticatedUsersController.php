<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role === 1) {
            return redirect('/super');
        }
        elseif(auth()->user()->role === 2){
            return redirect('/admin');
        }
        elseif(auth()->user()->role === 3){
            return redirect('/guset');
        }
        else{
            return auth()->logout();
        }
    }
}
