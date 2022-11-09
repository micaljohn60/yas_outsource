<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biz extends Model
{
    use HasFactory;

    protected $table = "bizs";
    protected $fillable = [
        "user_id",
        'name',
        'status',
        'phone',
        'register_number',
        'country',
        'address',
        'reason_sale',
        'biz_detail',
        'value',
        'size',
    ];

    public function createBiz($request)
    {
        return static::Create([
            "user_id" => auth()->user()->id,
            'name' => $request->name,
            'status' => $request->status,
            'phone' => $request->phone,
            'register_number' => $request->register_number,
            'country' => $request->country,
            'address' => $request->address,
            'reason_sale' => $request->reason_sale,
            'biz_detail' => $request->biz_detail,
            'value' => $request->value,
            'size' => $request->size,
        ]);
    }
}
