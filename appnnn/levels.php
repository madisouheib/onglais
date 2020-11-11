<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class levels extends Model
{


    protected $primaryKey = 'id_test';

    protected $table = 'level_test';
    public $timestamps = false;
    protected $fillable = [
        'nb_test','id_lang','time_test','id_tester','date_test','duration','day_test','skype_test'
    ];


    public function test(){

        return $this->hasMany(LevelList::class,'id_test', 'id_test');
    
    }



}
