<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Int $id)
    {
        $promotions = Promotion::with('shop', 'status', 'perimeter', 'type')->get()->where('shop_id', $id);

        return view('promotion', [
            'promotions' => $promotions,
        ]);
    }

    public function input($id)
    {
        $promotions = Promotion::with('shop', 'status', 'perimeter', 'type')->get()->where('shop_id', $id);

        return view('createPromotion', [
            'promotions' => $promotions,
        ]);
    }
}
