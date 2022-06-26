<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CartDetailModel;
use App\Models\SaleModel;
use App\Models\SaleDetailModel;


class Sale extends BaseController
{
    public function index()
    {
        return view('landing-page');
    }

    public function checkout()
    {
        
    }
}
