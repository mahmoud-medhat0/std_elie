<?php

namespace App\Http\Controllers;

use App\Models\Sec;
use Illuminate\Http\Request;

class FormRegister extends Controller
{
    public function register()
    {
        $secs = Sec::all();
        return view('form')->with('secs',$secs);
    }
}
