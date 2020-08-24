<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
     protected $fillable = ['image','link'];



     public static function($image,$link)
     {
        $image = $request->file('image')->store('Discover/image_partner');
     	return Partner::create(['image'=>$image,'link'=>$link]);
     }
}
