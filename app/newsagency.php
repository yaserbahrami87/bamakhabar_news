<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsagency extends Model
{
    public function getRouteKeyName()
    {
        return 'newsagency';
    }

    public function source()
    {
        return $this->hasMany('App\Source');
    }


}
