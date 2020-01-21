<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Gender extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'title',
    ];

    public function edit($libelle, $title)
    {
        $this->libelle = $libelle;
        $this->title = $title;
    }
}
