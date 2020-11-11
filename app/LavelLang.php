<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LavelLang extends Model
{




    protected $primaryKey = 'id_level';

    protected $table = 'levels';
    public $timestamps = false;
    protected $fillable = [
        'field_level'
    ];

}
