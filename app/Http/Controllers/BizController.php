<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBiz;
use App\Models\Biz;
use App\Models\BizImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BizController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Biz[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index(Request $request)
    {
        $bizs = Biz::filter()->publishList()->latest()->get();

        return view('biz.list', compact('bizs'));
    }

    public function store(StoreBiz $request)
    {
        $biz = (new Biz())->createBiz($request);

        // if ($request->has('file')) {
        //     $file = $request->file('file');

        //     $originalName = $file->getClientOriginalName();

        //     $sellerId = auth()->user()->id;

        //     $path = 'biz/seller_' . $sellerId . '/' . $originalName;

        //     Storage::put($path, file_get_contents($file));

        //     $biz->update([
        //         'file_path' => $path,
        //     ]);
        // }

<<<<<<< HEAD
        foreach ($request->file('biz_img') as $imagefile) {
            $filename = $imagefile->getClientOriginalName();
            $imagefile->move(public_path('storage/biz_images'), $filename);
            $sellerId = auth()->user()->id;
            // $path = 'biz/img/seller_' . $sellerId . '/' . $filename;
            // Storage::put($path, file_get_contents($imagefile));
            BizImage::create([
                'biz_id' => $biz->id,
                'img_path' => 'storage/biz_images'.$filename,
            ]);
        }
=======

            foreach ($request->file('biz_img') as $imagefile) {

                $filename = $imagefile->getClientOriginalName();
                $imagefile-> move(public_path('storage/biz_images'), $filename);
                $sellerId = auth()->user()->id;
                // $path = 'biz/img/seller_' . $sellerId . '/' . $filename;
                // Storage::put($path, file_get_contents($imagefile));
                BizImage::create([
                    'biz_id' => $biz->id,
                    'img_path' => 'storage/biz_images'.$filename
                ]);
            }

>>>>>>> 99dd3ce8cf8a458882eaec5491fcf42b824e82f9

        // $file = $request->file('biz_img');

        // $originalName = $file->getClientOriginalName();

        // $sellerId = auth()->user()->id;

        // $path = 'biz/img/seller_' . $sellerId . '/' . $originalName;

        // Storage::put($path, file_get_contents($file));

        // BizImage::create([
            //     'biz_id' => $biz->id,
            //     'img_path' => $path
<<<<<<< HEAD
        // ]);
=======
            // ]);



>>>>>>> 99dd3ce8cf8a458882eaec5491fcf42b824e82f9

        // return 'success';
        return redirect()->route('seller.dashboard')->with('message', 'Biz Created Successfully');
    }

    public function edit(Biz $biz)
    {
        if ($biz->status != 'pending') {
            return redirect()->route('biz.index');
        }
        $view = 'biz.edit'; // need to add FE

        return view($view, compact('biz'));
    }

    public function update(StoreBiz $biz)
    {
        if ($biz->status == 'pending') {
            (new Biz())->updateBiz($biz);

            return redirect()->back()->with('message', 'Biz updated Successfully');
        }

        return redirect()->back()->with('message', 'Biz cannot update!');
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
        $bizs = Biz::filter()->publishList()->latest()->take(7)->get();

        return view('welcome', compact('bizs'));
    }
}
