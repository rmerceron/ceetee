<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'username', 'password', 'phone', 'birthday', 'description',
        'image', 'latitude', 'longitude', 'gender_id','userType_id', 'address_id', 'state_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function type()
    {
        return $this->belongsTo('\App\UserType', 'userType_id');
    }

    public function address()
    {
        return $this->belongsTo('\App\Address');
    }

    public function state()
    {
        return $this->belongsTo('\App\State');
    }

    public function edit($firstName, $lastName, $email, $username, $password, $phone, $birthday, $description, $image, $latitude, $longitude, $gender, $type, $address, $state)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->phone = $phone;
        $this->birthday = $birthday;
        $this->description = $description;
        $this->image = $image;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->gender_id = $gender;
        $this->userType_id = $type;
        $this->address_id = $address;
        $this->state_id = $state;
    }
}
