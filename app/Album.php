<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function artWorks()
    {
        return $this->hasMany('images');
    }
}
