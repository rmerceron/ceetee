<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PromotionStatus extends Model
{
    use Notifiable;

    public $table = 'promotion_status';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
    ];

    public function edit($libelle)
    {
        $this->libelle = $libelle;
    }
}
