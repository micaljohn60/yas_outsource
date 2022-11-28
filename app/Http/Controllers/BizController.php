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
        return Biz::all();
    }

    public function store(StoreBiz $request)
    {
        (new Biz())->createBiz($request);

        return 'success';
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
        return Biz::where('user_id', auth()->user()->id)->get();
    }

    public function getLatest()
    {
        return Biz::orderBy('desc', 'created_at')->limit(7)->get();
    }
}
