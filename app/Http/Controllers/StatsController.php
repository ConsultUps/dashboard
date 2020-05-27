<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class StatsController extends Controller
{
    public function view(){
        $profile = new Profile();
        return view('erp.estadisticas')->withProfile($profile);
    }
}
