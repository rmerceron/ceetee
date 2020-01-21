<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notification extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'promotion_id', 'traderPoints', 'userPoints', 'status_id',
    ];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public function promotion()
    {
        return $this->belongsTo('\App\Promotion');
    }

    public function status()
    {
        return $this->belongsTo('\App\NotificationStatus');
    }

    public function edit($user, $promo, $traderPoints, $userPoints, $status)
    {
        $this->user_id = $user;
        $this->promotion_id = $promo;
        $this->traderPoints = $traderPoints;
        $this->userPoints = $userPoints;
        $this->status_id = $status;
    }
}
