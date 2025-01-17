<?php

namespace App\Http\Controllers;

use App\TraderShop;
use App\UserShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
    public function index()
    {
        $tradershops = TraderShop::with('user', 'shop', 'shop.category', 'shop.address')->get()->where('user_id', Auth::user()->getAuthIdentifier());
        $usershops = UserShop::with('user', 'shop', 'shop.category', 'shop.address')->get()->where('user_id', Auth::user()->getAuthIdentifier());

        return view('home', [
            'tradershops' => $tradershops,
            'usershops' => $usershops,
        ]);
    }



}
