<?php

namespace App\Http\Controllers;

use App\Models\BizProposal;
use App\Models\Proposal;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function dashboard()
    {
        // my all proposals
        $myProposals = Proposal::where('user_id',auth()->user()->id)->latest()->get();

        // my proposal list to biz
        $myBizProposals = BizProposal::with(['biz','proposal'])
                                    ->whereIn('proposal_id',$myProposals->pluck('id')->toArray())
                                    ->orWhere('proposal_upload_user_id',auth()->user()->id)
                                    ->latest()->paginate(15);

        // please replace with your Frontend redirect link or view link by compact of myProposals and myBizProposals
        return response()->json(['myAllProposals' => $myProposals,'myProposalToBiz' => $myBizProposals]);
    }
}
