<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type->value == 'seller') {
            return redirect('/seller/dashboard');
        } else {
            return redirect('/buyer/dashboard');
        }
    }

    public function adminLogin()
    {
        return view('admin.auth.login');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard.home');
    }

    public function pendingBizLists()
    {
        return view('admin.biz.bizlists');
    }
}
