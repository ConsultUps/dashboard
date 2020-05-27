<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Profile extends Model
{
    private $id;
    public function __construct($id = null)
    {
        if($id == null) $this->getSessionInfo();
        else{
            $this->id = $id;
            $this->getUserInfo();
        }
    }

    private $info;

    public function getSessionInfo(){
        $apiKey = session('token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'DOLAPIKEY' => $apiKey,
        ])->get('https://erp.consultups.tech/api/index.php/users/info');

        $this->info = $response->json();
    }
    public function getUserInfo(){
        $apiKey = session('token');
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'DOLAPIKEY' => $apiKey,
        ])->get("https://erp.consultups.tech/api/index.php/users/$this->id");

        $this->info = $response->json();
    }


    public function getJob(){
        return $this->info['job'];
    }

    public function getFullName(){
        return $this->info['firstname'].' '.$this->info['lastname'];
    }

    public function getId(){
        return $this->info['id'];
    }

}
