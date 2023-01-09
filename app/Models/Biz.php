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
            'position_of_owner' => $request->position_of_owner,
            'wish_sale_price' => $request->wish_sale_price,
            'actual_sale_price' => $request->actual_sale_pricece,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'share_holder' => $request->share_holder,
            'language' => $request->language,
            'years_est' => $request->years_est,
            'file_path' => $request->file_path,
        ]);
    }

    public function updateBiz($biz)
    {
        $request = $biz->all();
        static::where('id', $request['biz_id'])->update([
            'user_id' => auth()->user()->id,
            'name' => $request['name'],
            'status' => $request['status'],
            'phone' => $request['phone'],
            'register_number' => $request['register_number'],
            'country' => $request['country'],
            'address' => $request['address'],
            'reason_sale' => $request['reason_sale'],
            'biz_detail' => $request['biz_detail'],
            'position_of_owner' => $request['position_of_owner'] ?? '',
            'wish_sale_price' => $request['wish_sale_price'] ?? '',
            'actual_sale_price' => $request['actual_sale_price'] ?? '',
            'start_date' => $request['start_date'] ?? '',
            'end_date' => $request['end_date'] ?? '',
            'share_holder' => $request['share_holder'] ?? null,
            'language' => $request['language'] ?? '',
            'years_est' => $request['years_est'] ?? '',
            'file_path' => $request['file_path'] ?? '',
        ]);
    }
}
