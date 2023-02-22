<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProposalStoreRequest;
use App\Models\Biz;
use App\Models\BizProposal;
use App\Models\Proposal;
use App\Models\User;
use App\Notifications\SendProposalNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    public function store(ProposalStoreRequest $request)
    {
        app(Proposal::class)->createProposal($request->get('title'), $request->get('description'));

        return redirect()->route('proposal.index'); //! frontend need to replace with your return route
    }

    public function create()
    {
        return view('proposal.create');
    }

    public function index()
    {
        $proposals = Proposal::select('id', 'title', 'description', 'created_at')->where('user_id', auth()->user()->id)->latest()->get();

        return view('proposal.list', compact('proposals')); //! frontend need to replace with return view('..',compact('proposals'));
    }

    public function edit(Proposal $proposal) // this would be edit
    {
        return view('proposal.edit', compact('proposal')); //! frontend need to replace with return view('..',compact('proposal'));
    }

    public function show(Proposal $proposal, Request $request) // this would be edit
    {
        $biz = Biz::findOrFail($request->biz_id);

        return view('proposal.show', compact('proposal', 'biz')); //! frontend need to replace with return view('..',compact('proposal'));
    }

    public function uploadProposalToBiz(Request $request)
    {
        $bizProposal = BizProposal::where('biz_id', $request->get('biz_id'))->where('proposal_id', $request->get('proposal_id'))->first();
        //TODO - need to redirect with error message
        if ($bizProposal) {
            return redirect()->back()->with('message', 'Already upload proposal');
        }
        $biz = Biz::findOrFail($request->get('biz_id'));
        if ($request->get('type') === 'my_proposal') {
            $proposal = Proposal::findOrFail($request->get('proposal_id'));

            BizProposal::create([
                'biz_id' => $biz->id,
                'proposal_id' => $proposal->id,
            ]);
            Notification::send(User::find($biz->user_id), new SendProposalNotification($proposal, $biz));
        }

        if ($request->get('type') === 'select_file') {
            $file = $request->file('file');

            $originalName = $file->getClientOriginalName();

            $buyerId = auth()->user()->id;

            $path = 'biz_proposals/'.$biz->id.'_buyer_'.$buyerId.'/'.$originalName;

            Storage::put($path, file_get_contents($file));

            $proposal = BizProposal::create([
                'biz_id' => $biz->id,
                'proposal_upload_user_id' => $buyerId,
                'proposal_file_path' => $path,
            ]);

            Notification::send(User::find($biz->user_id), new SendProposalNotification($proposal, $biz));
        }

        // return 'return redirect back with success message'; //! FE need to redirect redirect back with success message
        return redirect()->back()->with('message', 'Proposal Sent Successfully');
    }

    public function acceptBiz(Proposal $proposal, Request $request)
    {
        $biz = Biz::findOrFail($request->biz_id);

        BizProposal::where('biz_id', $request->biz_id)->where('proposal_id', $proposal->id)->update(['status' => 'accept']);

        Notification::send(User::find($proposal->user_id), new SendProposalNotification($proposal, $biz));

        // return 'return redirect back with success message'; //! FE need to redirect redirect back with success message
        return redirect()->back()->with('message', 'Proposal Accept Successfully');
    }

    public function declineBiz(Proposal $proposal, Request $request)
    {
        $biz = Biz::findOrFail($request->biz_id);

        BizProposal::where('biz_id', $request->biz_id)->where('proposal_id', $proposal->id)->update(['status' => 'decline']);

        Notification::send(User::find($proposal->user_id), new SendProposalNotification($proposal, $biz));

        // return 'return redirect back with success message'; //! FE need to redirect redirect back with success message
        return redirect()->back()->with('message', 'Proposal Decline Successfully');
    }
}
