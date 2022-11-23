<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BizProposal extends Model
{
    protected $table = "biz_proposal";

    protected $fillable = [
        'biz_id',
        'proposal_id',
        'proposal_upload_user_id',
        'proposal_file_path'
    ];
}
