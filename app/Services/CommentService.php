<?php

namespace App\Services;

use App\Models\Biz;
use App\Models\Comment;

class CommentService
{
    public static function make(): CommentService
    {
        return new self();
    }

    public function store(string $content, int $receiver_id, int $sender_id = null, int $biz_id = null)
    {
        return Comment::create([
            'sender_id' => $sender_id ?? auth()->user()->id,
            'receiver_id' => $receiver_id,
            'biz_id' => Biz::findOrFail($biz_id)->id,
            'content' => $content
        ]);
    }

    public function listByBiz(int $biz_id)
    {
        return Comment::where('biz_id', $biz_id)->get();
    }

    public function delete(int $comment_id)
    {
        return Comment::findOrFail($comment_id)->delete();
    }
}
