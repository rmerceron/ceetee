<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NotificationStatus extends Model
{
    use Notifiable;

    public $table = 'notification_status';

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
