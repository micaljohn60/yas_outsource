<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','description','file_name','file_path'];

    public function createProposal($title,$desc)
    {
        return $this->create([
            'user_id' => auth()->user()->id,
            'title' => $title,
            'description' => $desc
        ]);
    }
}
