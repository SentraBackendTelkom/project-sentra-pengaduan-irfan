<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspiration;
use App\Models\Aspiration_Image;
use App\Models\Sender;

class AspirationController extends Controller
{
    function Create(){
      return view('pages.main.Aspiration');
    }

    function Index(){
      $aspiration = Aspiration::all();

      return $aspiration;
    }
  
    function Show($slug){
      $aspiration = Aspiration::where('slug', $slug)->first();

      return $aspiration;
    }
  
    function Store(){
      $senderAttributes = request()->validate([
        'name' => ['required'],
        'email' => ['required'],
        'phone_number' => ['required'],
        'address' => ['required']
      ]);

      $sender = Sender::create($senderAttributes);

      request()->validate([
        'categories' => ['required'],
        'title' => ['required'],
        'aspiration' => ['required'],
        'location' => ['required']
      ]);

      $aspiration = Aspiration::create([
        'senders_id'    => $sender->getKey(),
        'categories_id' => request()->categories,
        'title'         => request()->title,
        'aspiration'    => request()->aspiration,
        'location'      => request()->location,
        'status'        => 0
        ]);

      dd($aspiration);
      }
}
