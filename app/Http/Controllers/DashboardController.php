<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profile;
use \App\Trello;
use \App\Ticket;

class DashboardController extends Controller
{
    public function view(){
        $profile = new Profile();
        $trello = new Trello();
        if($profile->getJob()=='CEO' || $profile->getJob()=='ERP/CRM'){
            $tickets = new Ticket();
            return view('dashboard')->withProfile($profile)->withTrello($trello)->withTickets($tickets);
        }
        else return view('dashboard')->withProfile($profile)->withTrello($trello);

    }
}
