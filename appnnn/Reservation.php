<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{



    protected $primaryKey = 'id_reserv';

    protected $table = 'reservation';
    public $timestamps = false;
    protected $fillable = [
        'id_session','id_learner'
    ];



}
