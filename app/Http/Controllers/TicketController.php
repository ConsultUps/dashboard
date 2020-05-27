<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Ticket;

class TicketController extends Controller
{
    public function view(){
        $profile = new Profile();
        $tickets = new Ticket();
        return view('erp.tickets')->withProfile($profile)->withTickets($tickets);
    }
}
