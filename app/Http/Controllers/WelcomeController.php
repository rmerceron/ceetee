<?php


namespace App\Http\Controllers;


use App\Shop;

class WelcomeController
{
    public function index()
    {
        $shops = Shop::with('category','address')->get();
        return view('welcome',[
            'shops'=>$shops,
        ]);
    }
}
