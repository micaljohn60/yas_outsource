<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProposalStoreRequest;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(ProposalStoreRequest $request)
    {
        app(Proposal::class)->createProposal($request->get('title'),$request->get('description'));

        return view('proposal.list'); //! frontend need to replace with your return route
    }

    public function create()
    {
        return view('proposal.create');
    }

    public function index()
    {
        $proposals = Proposal::select('id','title','description','created_at')->latest()->get();
        return view('proposal.list',compact('proposals')); //! frontend need to replace with return view('..',compact('proposals'));
    }

    public function show(Proposal $proposal)
    {
        return view('proposal.edit',compact('proposal')); //! frontend need to replace with return view('..',compact('proposal'));
    }
}
