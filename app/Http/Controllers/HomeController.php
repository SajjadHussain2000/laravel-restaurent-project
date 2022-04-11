<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\foodchef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = food::all();
        $data2 = foodchef::all(); 
        return view("home",compact("data","data2"));
    }

    public function redirects()
    {
        $data = food::all();
        $data2 = foodchef::all();
        $usertype = Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.adminhome');
        }else{
            return view('home',compact('data','data2'));
        }
    }
}
