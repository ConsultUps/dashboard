<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Login extends Model
{
    public static function getToken($user, $password){
        $response = Http::get("https://erp.consultups.tech/api/index.php/login?login=$user&password=$password");
        if($response->successful()) return $response->json()['success']['token'];
        else return false;
    }
}
