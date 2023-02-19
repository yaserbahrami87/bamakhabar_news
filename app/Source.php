<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable=[
        'source','last_update','status','category_id','link'
    ];

    public function newsAgancy()
    {
        return $this->belongsTo('App\newsagency','newsagency_id','id');
    }
}
