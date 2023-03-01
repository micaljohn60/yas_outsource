<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    protected $table = 'price_plans';

    protected $fillable = ['name', 'description', 'monthly_price', 'yearly_price', 'type'];
}
