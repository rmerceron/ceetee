<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserShop extends Model
{
    public $table = 'users_shops';
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
