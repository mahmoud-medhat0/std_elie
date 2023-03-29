<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        session()->flash('active','home');
        switch (Auth::user()->gender) {
            case 'm':
                session()->flash('image','images/UserBoy.png');
                break;
            case 'f':
                session()->flash('image','images/GirlUser.png');
                break;
        }
        return view('home');
    }
}
