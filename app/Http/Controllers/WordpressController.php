<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class WordpressController extends Controller
{
    public function marketing(){
        $profile = new Profile();
        return view('marketing.wordpress')->withProfile($profile);
    }
}
