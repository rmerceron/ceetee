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

    /**
     * @param Int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Int $id)
    {
        return view('scanQR', [
            'promotion' => $id,
        ]);
    }

    public function form(Int $id)
    {
        $shopselected = $id;
        return view('createPromotion', [
            'shopselected' => $shopselected,
        ]);
    }

    public function store(Int $id)
    {
        Promotion::create([
            'title'=>request('title'),
            'description'=>request('description'),
            'image'=>'/image/promo/0.jpg',
            'startDate'=>request('startDate'),
            'endDate'=>request('endDate'),
            'sendingPeriod'=>'2020-01-01 00:00:00',
            'limit'=>request('limit'),
            'qrCode'=>uniqid(),
            'shop_id'=>$id,
            'status_id'=>1,
            'perimeter_id'=>1,
            'type_id'=>request('promotionType'),
        ]);


        return ['redirect' => route('promotion', $id)];
    }
}
