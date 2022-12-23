<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBiz;
use App\Models\Biz;

class BizController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Biz[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $bizs = Biz::all();
        return view('biz.list', compact('bizs'));
    }

    public function store(StoreBiz $request)
    {
        (new Biz())->createBiz($request);

        // return 'success';
        return redirect()->back()->with('message', 'Biz Created Successfully');
    }

    public function create()
    {
        return view('biz.create');
    }

    public function show(Biz $biz)
    {
        $proposals = null;

        if (auth()->check() && auth()->user()->type->value === 'buyer') {
            $proposals = auth()->user()->proposals;
        }

        $view = 'biz.show'; // need to add FE

        return view($view, compact('biz', 'proposals'));
    }

    public function getBizByUser()
    {
        $bizs = Biz::where('user_id', auth()->user()->id)->get();

        return view('home', compact('bizs'));
    }

    public function getLatest()
    {
        $bizs = Biz::orderBy('created_at', 'desc')->limit(7)->get();

        return view('welcome', compact('bizs'));
    }
}
