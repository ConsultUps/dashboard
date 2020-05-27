<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class SocialController extends Controller
{
    public function view(){
        $profile = new Profile();
        return view('marketing.rrss')->withProfile($profile);
    }

    public function ventas(){
        $profile = new Profile();
        return view('ventas.facebook')->withProfile($profile);
    }
}
