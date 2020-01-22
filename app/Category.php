<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle', 'state_id',
    ];

    public function state()
    {
        return $this->belongsTo('\App\State');
    }

    public function edit($libelle, $state)
    {
        $this->libelle = $libelle;
        $this->state_id = $state;
    }

    public static function getOneById($id)
    {
        return Category::where('id', $id)->get();
    }
}
