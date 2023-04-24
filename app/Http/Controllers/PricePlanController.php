<?php

namespace App\Http\Controllers;

use App\Models\PricePlan;

class PricePlanController extends Controller
{
    public function index()
    {
        return view("pricings.lists");
        // return PricePlan::all();
    }
}
