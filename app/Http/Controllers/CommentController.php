<?php

namespace App\Http\Controllers;

use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        CommentService::make()->store( $request->get('content'), (int) $request->get('receiver_id'), auth()->user()->id,  (int) $request->get('biz_id') );

        return redirect()->back();
    }
}
