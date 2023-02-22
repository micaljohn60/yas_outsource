<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPricePlan extends Model
{
    protected $table = 'users_price_plans';

    protected $fillable = ['user_id', 'price_plan_id', 'expired_at', 'is_active'];
}
