<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reqdatacontrol extends Controller
{
    public function goster()
    {
        return view('welcome');
    }
   public function verial (request $req)
   {
       reqdatas::create([
        'name'=>$req->rr
       ]);
   }
}
