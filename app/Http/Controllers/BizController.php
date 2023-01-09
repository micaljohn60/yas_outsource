<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBiz;
use App\Models\Biz;
use Illuminate\Support\Facades\Storage;

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
        $biz = (new Biz())->createBiz($request);

        if ($request->has('file_path')) {
            $file = $request->file('file_path');

            $originalName = $file->getClientOriginalName();

            $sellerId = auth()->user()->id;

            $path = 'biz/seller_'.$sellerId.'/'.$originalName;

            Storage::put($path, file_get_contents($file));

            $biz->update([
                'file_path' => $path,
            ]);
        }

        // return 'success';
        return redirect()->route('seller.dashboard')->with('message', 'Biz Created Successfully');
    }

    public function edit(Biz $biz)
    {
        $view = 'biz.edit'; // need to add FE

        return view($view, compact('biz'));
    }

    public function update(StoreBiz $biz)
    {
        (new Biz())->updateBiz($biz);

        return redirect()->back()->with('message', 'Biz updated Successfully');
    }

    public function delete($id)
    {
        Biz::find($id)->delete();
        return redirect()->back()->with('message', 'Biz Deleted Successfully');
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
