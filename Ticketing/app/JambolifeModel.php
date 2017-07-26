<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JambolifeModel extends Model
{

    protected $table = 'event';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'EventTitle', 'EventImage', 'EventDescription','id','StartingDate', 'EndingDate',
        'StartingTime','EndingTime','EventPoster','EventVenue', 'EventType', 'City', 'Country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
