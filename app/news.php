<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable=[
        'title','shortlink','description','content','img_thumbnail','category_id','source_id','likes','views','link_source','date_source','date_fa','time_fa','status','special'
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

    public function diff()
    {
//        date_default_timezone_set('UTC');
        $dt=Carbon::now('Asia/Tehran');

        if (($dt->diffInSeconds($this->created_at))<=59)
        {
            return $dt->diffInMinutes($this->created_at)." ثانیه ";
        }
        else if( ($dt->diffInMinutes($this->created_at))<=59)
        {
            return $dt->diffInMinutes($this->created_at)." دقیقه ";
        }
        else if( ($dt->diffInHours($this->created_at))<=23)
        {
            return $dt->diffInHours($this->created_at)." ساعت ";
        }
        else
        {
            return $dt->diffInDays($this->created_at)." روز ";
        }
    }
}
