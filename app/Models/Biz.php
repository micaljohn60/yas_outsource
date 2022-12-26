<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biz extends Model
{
    use HasFactory;

    protected $table = 'bizs';

    protected $fillable = [
        'user_id',
        'name',
        'status',
        'phone',
        'register_number',
        'country',
        'address',
        'reason_sale',
        'biz_detail',
        'position_of_owner',
        'wish_sale_price',
        'actual_sale_price',
        'start_date',
        'end_date',
        'share_holder',
        'language',
        'years_est',
        'file_path',
    ];

    public function createBiz($request)
    {
        return static::Create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'status' => $request->status,
            'phone' => $request->phone,
            'register_number' => $request->register_number,
            'country' => $request->country,
            'address' => $request->address,
            'reason_sale' => $request->reason_sale,
            'biz_detail' => $request->biz_detail,
            'position_of_owner',
            'wish_sale_price' => $request->position_of_owner,
            'actual_sale_price' => $request->wish_sale_price,
            'start_date' => $request->actual_sale_price,
            'end_date' => $request->start_date,
            'share_holder' => $request->end_date,
            'language' => $request->share_holder,
            'years_est' => $request->language,
            'file_path' => $request->years_est,
        ]);
    }
}
