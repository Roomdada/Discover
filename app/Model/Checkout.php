<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
   

   protected $fillable = ['fullname','email','location','ticket_number','price_total','event_id'];




    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
