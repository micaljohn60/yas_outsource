<?php

namespace Database\Seeders;

use App\Models\PricePlan;
use Illuminate\Database\Seeder;

class PricePlanSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PricePlan::insert($this->getPlans());
    }

    private function getPlans()
    {
        return [
            'name' => 'premium Cheap',
            'description' => 'premium',
            'monthly_price' => 100,
            'yearly_price' => 1200,
            'type' => 'buyer',
        ];
    }
}
