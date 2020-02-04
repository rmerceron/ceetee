<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TraderShop extends Model
{
    public $table = 'traders_shops';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'shop_id',
    ];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function shop()
    {
        return $this->belongsTo('\App\Shop', 'shop_id');
    }

}
