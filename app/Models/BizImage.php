<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BizImage extends Model
{
    use HasFactory;

    protected $fillable = ['biz_id', 'img_path'];
}
