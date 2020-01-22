<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getAll()
    {
        $shops = Shop::all();

        return view('welcome',[
            'shops'=>$shops,
        ]);
    }

    public function getShopsByCategory($id)
    {
        $shops = Shop::getShopsByCategoryId($id);
        return view('welcome',[
            'shops'=>$shops,
        ]);
    }
}
