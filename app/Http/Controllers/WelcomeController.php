<?php


namespace App\Http\Controllers;


use App\Shop;
use App\User;
use App\UserShop;
use Illuminate\Support\Facades\Auth;

class WelcomeController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shops = Shop::with('category','address')->get();
        if (Auth::user() != null){
            $usershops = UserShop::all()->where('user_id', Auth::user()->getAuthIdentifier());
            return view('welcome',[
                'shops'=>$shops,
                'usershops'=>$usershops,
            ]);
        }

        return view('welcome',[
            'shops'=>$shops,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Int $id
     */
    public function store(Int $id)
    {
        UserShop::create([
            'user_id'=>Auth::user()->getAuthIdentifier(),
            'shop_id'=>$id,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Int $id
     * @throws \Exception
     */
    public function destroy(Int $id)
    {
        $usershop = UserShop::all()->where('shop_id', $id)->join('user_id', Auth::user()->getAuthIdentifier());
//        $userShop = UserShop::destroy($id);
        UserShop::destroy($usershop);
//        var_dump($userShop);
    }
}
