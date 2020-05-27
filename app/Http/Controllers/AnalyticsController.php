<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class AnalyticsController extends Controller
{
    public function marketing(){
        $profile = new Profile();
        return view('marketing.analytics')->withProfile($profile);
    }
}
