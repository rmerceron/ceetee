<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PromotionPerimeter extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'distance', 'price',
    ];

    public function edit($distance, $price)
    {
        $this->distance = $distance;
        $this->price = $price;
    }
}
