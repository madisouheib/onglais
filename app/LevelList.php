<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelList extends Model
{

    protected $primaryKey = 'id_test_level';

    protected $table = 'list_level_test';
    public $timestamps = true;
    protected $fillable = [
        'id_test_level','id_test','id_learner','id_level','time_test_user'
    ];


}
