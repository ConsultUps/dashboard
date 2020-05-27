<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class Ticket extends Model
{
    private $info;
    public function __construct()
    {
        $this->getInfo();
    }

    public function getInfo(){
        $apiKey = session('token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'DOLAPIKEY' => $apiKey,
        ])->get('https://erp.consultups.tech/api/index.php/tickets?sortfield=datec&sortorder=ASC&sqlfilters=(t.fk_statut%3C%3E8)');

        $this->info = $response->json();
    }

    public function getTickets(){
        return array_slice($this->info, 0, 10);
    }

    public function getTicket(){
        return $this->info[0];
    }

    public function count(){
        return count($this->info);
    }
}
