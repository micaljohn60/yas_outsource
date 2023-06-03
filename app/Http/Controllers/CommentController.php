<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use App\Models\User;
use App\Notifications\SendCommentNotification;
use App\Services\CommentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        CommentService::make()->store( $request->get('content'), (int) $request->get('receiver_id'), auth()->user()->id,  (int) $request->get('biz_id') );

        $biz = Biz::find((int) $request->get('biz_id'));

        Notification::send(User::find((int) $request->get('receiver_id')), new SendCommentNotification($biz));

        return redirect()->back();
    }
}
