<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable=[
        'title','shortlink','description','content','img_thumbnail','category_id','source_id','likes','views','link_source','date_source','date_fa','time_fa','status'
    ];

    public function getRouteKeyName()
    {
        return 'shortlink';
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function source()
    {
        return $this->belongsTo('App\Source');
    }
}
