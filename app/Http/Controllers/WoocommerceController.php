<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class WoocommerceController extends Controller
{
    public function view(){
        $profile = new Profile();
        return view('ventas.woocommerce')->withProfile($profile);
    }
}
