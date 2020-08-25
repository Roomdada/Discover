<?php

namespace App\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['fullname','email','subject','content','unique_id'];



    public static function createContact($fullname,$email,$subject,$content)
    {
    	return Contact::create(['fullname'=>$fullname,'email'=>$email,'subject'=>$subject,'content'=>$content,'unique_id'=>uniqid()]);
    }

    public static function getMessage($unique_id)
    {
    	return Contact::where('unique_id',$unique_id)->delete();
    }
}
