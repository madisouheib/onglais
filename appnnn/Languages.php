<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class languages extends Model
{



    protected $primaryKey = 'id_lang';

    protected $table = 'languages';
    public $timestamps = false;
    protected $fillable = [
        'id_lang','field_lang'
    ];




}
