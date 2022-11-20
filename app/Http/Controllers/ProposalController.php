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

        return true; //! frontend need to replace with your return route
    }

    public function index()
    {
        $proposals = Proposal::select('title','description','created_at')->latest()->get();

        return $proposals; //! frontend need to replace with return view('..',compact('proposals'));
    }

    public function show(Proposal $proposal)
    {
        return $proposal; //! frontend need to replace with return view('..',compact('proposal'));
    }
}
