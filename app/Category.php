<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'category','status'
    ];

    public function news()
    {
        return $this->hasMany('App\news')->orderBy('id','desc');
    }

    public function getRouteKeyName()
    {
        return 'category';
    }
}
