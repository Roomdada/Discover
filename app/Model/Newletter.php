<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newletter extends Model
{
    protected $fillable = ['email'];





    //create a newletter

    public static function createNewletter($email)
    {
    	return Newletter::create(['email'=>$email]);
    }
}
