<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function publishUser ()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
