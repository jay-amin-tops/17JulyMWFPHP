<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $userData =  \Auth::user();
        // dd($userData);
        if ($userData['role_id'] == 1) {
            return redirect('admindashboard');
        } else {
            return view('home');
        }
    }
}
