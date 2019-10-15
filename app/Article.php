<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
