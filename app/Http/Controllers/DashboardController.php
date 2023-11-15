<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('UserLogin');
    }
    
    public function index(){
        return view('main_dashboard')->with([
            'user' => Auth::user(),
        ]);
    }
}