<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Event extends Model
{
    use Sluggable;

	protected $fillable =['title','description','price','price_vip','place','ticket','ticket_vip','event_date','event_hourb','event_hourf','image','artiste_id'];

   public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function artiste()
    {
        return $this->hasMany(Artiste::class);
    }


    public function checkout()
    {
        return $this->belongsTo(Checkout::class);
    }
}
