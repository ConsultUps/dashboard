<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;


class Thirdparty extends Model
{
    private $info;

    public function __construct($id)
    {
        $this->getInfo($id);
    }

    public function getInfo($id){
        $apiKey = session('token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'DOLAPIKEY' => $apiKey,
        ])->get("https://erp.consultups.tech/api/index.php/thirdparties/$id");

        $this->info = $response->json();
    }

    public function getName(){
        return $this->info['name'];
    }
    public function getPhone(){
        return $this->info['phone'];
    }
}
