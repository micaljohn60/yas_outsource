<?php

namespace App\Http\Controllers;

use App\Models\PricePlan;

class PricePlanController extends Controller
{
    public function index()
    {
        $sellerPlan = PricePlan::where("type", "seller")->get();

        $buyerPlan = PricePlan::where("type", "buyer")->get();

        $expertPlan = PricePlan::where("type", "expert")->get();

        return view("pricings.lists", compact('sellerPlan', 'buyerPlan', 'expertPlan'));
    }
}
