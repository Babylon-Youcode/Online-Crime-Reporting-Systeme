<?php

namespace App\Http\Controllers;

use App\Models\reports;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function islogin()
    {
        if (Auth::user()->type == "admin") {
            return redirect(route('admin'));
        }

        return redirect(route('user'));
    }

    public function user()
    {
        return view('userdash');
    }

    public function admin()
    {
        $usercount= User::count();
        $reportscount= reports::count();

        return view('admindash' , [ "usercount"=>$usercount , "reportscount"=>$reportscount ] );
    }

    public function index()
    {
        return view('home');
    }
    
}

