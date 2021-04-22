<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    public function index()
    {
        // 主 -> 従
        // areasのid:1が東京を指定しており、東京に紐づいてるshopsの情報を取ってくる。
       $area_tokyo = Area::find(1)->shops;

        // 従 -> 主
        // shopsのid:3なので、area_id:1のnameの東京を取ってくる。
        $shop = Shop::find(3)->area->name;
        dd($area_tokyo, $shop);

    }
}
