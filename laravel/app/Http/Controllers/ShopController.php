<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $area_tokyo = Area::find(1)->shops;
        dd($area_tokyo);
    }
}
