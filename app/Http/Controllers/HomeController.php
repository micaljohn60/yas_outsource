<?php

namespace App\Http\Controllers;

use App\Models\Biz;
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
        } elseif (Auth::user()->type->value == 'admin') {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/buyer/dashboard');
        }
    }

    public function pricings()
    {
        return view('pricings.lists');
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
        $bizs = Biz::pendingList()->latest()->get();
        $status = "pending";
        return view('admin.biz.bizlists', compact('bizs','status'));
    }

    public function acceptedBizLists()
    {
        $bizs = Biz::where(["status"=>"onsale"])->get();
        $status = "onsale";
        return view('admin.biz.bizlists', compact('bizs','status'));
    }

    public function publishBiz($id)
    {

        Biz::find($id)->update(['status' => "onsale"]);
        return redirect()->route('pendingBiz');
    }
}
