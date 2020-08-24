<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artiste extends Model
{
    use Sluggable;
    protected $fillable = ['fullname','country','description','image'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

     public function event()
    {
        return $this->belongTo(Event::class);
    }
     public function eventrecent()
    {
        return $this->belongTo(EventRecent::class);
    }
}
