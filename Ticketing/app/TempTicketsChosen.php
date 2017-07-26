<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TempTicketsChosen extends Model
{
    protected $table = 'tempticketschosen';

    protected $primaryKey = 'id';

    protected $fillable = [
        'type','quantity',
    ];

}
