<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserType extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'icon',
    ];

    public function edit($libelle, $icon)
    {
        $this->libelle = $libelle;
        $this->icon = $icon;
    }
}
