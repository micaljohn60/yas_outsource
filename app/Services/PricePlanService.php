<?php

namespace App\Services;

use App\Models\PricePlan;
use App\Models\UserPricePlan;
use Illuminate\Support\Carbon;

class PricePlanService
{
    public function insertPricePlan($plan)
    {
        $pricePlan = PricePlan::findOrFail($plan->price_plan_id);
        UserPricePlan::create([
            'price_plan_id' => $pricePlan,
            'user_id' => $plan->user_id,
            'expired_at' => $this->calculateExpireDate($plan),
            'is_active' => true,
        ]);
    }

    public function calculateExpireDate($duration): string
    {
        if ($duration === 'monthly') {
            return Carbon::now()->addMonth()->toDateString();
        }

        return Carbon::now()->addYear()->toDateString();
    }
}
