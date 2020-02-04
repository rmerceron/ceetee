<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Promotion extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image', 'startDate', 'endDate', 'sendingPeriod', 'limit', 'qrCode', 'shop_id', 'status_id', 'perimeter_id', 'type_id',
    ];

    public function shop()
    {
        return $this->belongsTo('\App\Shop');
    }

    public function status()
    {
        return $this->belongsTo('\App\PromotionStatus');
    }

    public function perimeter()
    {
        return $this->belongsTo('\App\PromotionPerimeter');
    }

    public function type()
    {
        return $this->belongsTo('\App\PromotionType');
    }

    public function edit($title, $description, $image, $startDate, $endDate, $sendingPeriod, $limit, $qrcode, $shop, $status, $perimeter, $type)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->sendingPeriod = $sendingPeriod;
        $this->limit = $limit;
        $this->qrcode = $qrcode;
        $this->shop_id = $shop;
        $this->status_id = $status;
        $this->perimeter_id = $perimeter;
        $this->type_id = $type;
    }
}
