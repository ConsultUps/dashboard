<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class Earning extends Model
{
    public function __construct()
    {
        $this->getEarningAnnual();
    }

    private $info;
    private $totalAnnual;

    public function getEarningAnnual()
    {
        $apiKey = session('token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'DOLAPIKEY' => $apiKey,
        ])->get('https://erp.consultups.tech/api/index.php/orders?sortfield=t.rowid&sortorder=ASC&limit=100');

        $this->info = $response->json();

        foreach($this->info as $row){
             if ($row['billed']==1);
        }
    }

    public function dateTimestamp(){
        $fecha = date_create();
        $fecha actual = (string) date_format($fecha, 'Y') . "\n";

        date_timestamp_set($fecha, 1590332557);
        $fecha_pedido = (string) date_format($fecha, 'Y') . "\n";
    }
}
