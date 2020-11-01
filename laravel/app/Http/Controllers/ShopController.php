<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $area_tokyo = Area::find(1)->shops;

        $shop_3 = Shop::find(3)->area;

        $shop_route = Shop::find(1)->routes;
        dd($shop_route);
    }
}
