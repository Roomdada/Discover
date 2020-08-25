<?php

namespace App\Http\Controllers;
use App\Model\Contact;
use App\Model\Event;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {
   	  $events = DB::table('events')->take(3)->orderBy('created_at')->get();
   	  $all =  DB::table('events')
   	              ->join('artistes','artiste_id','=','artistes.id')
   	              ->select('artistes.fullname as name','artistes.country as country','events.title','events.event_date as date','events.description','events.image','events.slug')
   	              ->get();
   	  return view('index',compact('events','all'));
   }

   public function about()
   {
   	  return view('pages.about');
   }

   public function contact()
   {
   	  return view('pages.contact');
   }

   public function storeContact(Request $request)
   {
   	  $this->validate($request,['fullname'=>'required|min:3','email'=>'required','subject'=>'required|min:5','message'=>'required|min:5']);
   	  Contact::createContact($request->fullname,$request->email,$request->subject,$request->message);
   	  Flashy::message('Votre message a été envoyé!');
   	  return back();
   }

   public function event()
   {
   	  return view('pages.event');
   }
   public function gallery()
   {
   	  return view('pages.gallery');
   }

}
