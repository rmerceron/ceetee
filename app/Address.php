<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Address extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'libelle', 'additionalAddress', 'city', 'postalCode', 'latitude', 'longitude',
    ];

    public function edit($number, $libelle, $additionalAddress, $city, $postalCode, $latitude, $longitude)
    {
        $this->number = $number;
        $this->libelle = $libelle;
        $this->additionalAddress = $additionalAddress;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
