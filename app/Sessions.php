<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    
protected $primaryKey = 'id_session';
protected $table      = 'sessions';
public    $timestamps = true;
protected $fillable   = ['id_teacher','id_lang','per_week','start_at','nb_session','nb_extrat','time_session','day_week','id_level','zoom_link','date_session'];

public function reservation(){

    return $this->hasMany(Reservation::class,'id_session', 'id_session');

}

}
