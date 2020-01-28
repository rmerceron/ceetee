<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'corporateName', 'description', 'image', 'phone', 'startHours', 'category_id', 'address_id', 'state_id',
    ];

    public function address()
    {
        return $this->belongsTo('\App\Address');
    }

    public function state()
    {
        return $this->belongsTo('\App\State');
    }

    public function category()
    {
        return $this->belongsTo('\App\Category');
    }

    public function edit($corporateName, $description, $image, $phone, $startHours, $endHours, $category, $address, $state)
    {
        $this->corporateName = $corporateName;
        $this->description = $description;
        $this->image = $image;
        $this->phone = $phone;
        $this->startHours = $startHours;
        $this->endHours = $endHours;
        $this->category_id = $category;
        $this->address_id = $address;
        $this->state_id = $state;
    }

}
