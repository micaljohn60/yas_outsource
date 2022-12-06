<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use App\Models\BizProposal;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard()
    {
        // my all biz list
        $bizs = Biz::where('user_id',auth()->user()->id)->latest()->get();

        // all proposals list to my bizs
       $proposalsToMyBizs = BizProposal::with(['biz','proposal'])
                                    ->whereIn('biz_id',$bizs->pluck('id')->toArray())
                                    ->latest()->get();

       //! asking about how to show proposalsToMyBizs (for direct proposal and select file proposal?)
        return view('seller.dashboard',compact('bizs','proposalsToMyBizs'));
        // return response()->json(['bizs' => $bizs, 'proposals' => $proposalsToMyBizs]); //! have to Replace with FE redirect link

    }
}
