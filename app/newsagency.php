<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsagency extends Model
{
    public function source()
    {
        return $this->hasMany('App/Source');
    }
}
