<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profile;

class TwitterController extends Controller
{
    public function marketing(){
        $profile = new Profile();
        return view('marketing.twitter')->withProfile($profile);
    }
}
