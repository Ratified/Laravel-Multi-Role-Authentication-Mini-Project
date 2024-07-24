<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
       if(auth()->user()->role == 'admin'){
           return view('admin.admin');
        }else{
            return view('dashboard');
        }
    }
}
