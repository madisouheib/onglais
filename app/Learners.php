<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learners extends Model
{
    protected $primaryKey = 'id_learn';

    protected $table = 'learners';
    public $timestamps = false;
    protected $fillable = [
        'id_learner','id_lang'
    ];




}
