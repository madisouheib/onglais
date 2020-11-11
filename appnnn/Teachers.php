<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{

    protected $primaryKey = 'id_tech';

    protected $table = 'tachers';
    public $timestamps = false;
    protected $fillable = [
        'id_lang','id_teacher'
    ];




}
