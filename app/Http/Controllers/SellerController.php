<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use App\Models\BizProposal;

class SellerController extends Controller
{
    public function dashboard()
    {
        // my all biz list
        $bizs = Biz::where('user_id', auth()->user()->id)->latest()->paginate(10);

        // all proposals list to my bizs
        $proposalsToMyBizs = BizProposal::with(['biz', 'proposal'])
                                     ->whereIn('biz_id', $bizs->pluck('id')->toArray())
                                     ->latest()->paginate(10);

        //! asking about how to show proposalsToMyBizs (for direct proposal and select file proposal?)
        return view('seller.dashboard', compact('bizs', 'proposalsToMyBizs'));
        // return response()->json(['bizs' => $bizs, 'proposals' => $proposalsToMyBizs]); //! have to Replace with FE redirect link
    }
}
