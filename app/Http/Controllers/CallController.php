<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Http;


class CallController extends Controller
{

    public function update(Request $request, $id){
        if($request->input('phone') != null){
            //Asignamos el ticket al trabajador y lo pasamos a leído
            $profile = new Profile();
            $apiKey = session('token');
            Http::withHeaders([
                'Accept' => 'application/json',
                'DOLAPIKEY' => $apiKey,
            ])->put("https://erp.consultups.tech/api/index.php/tickets/$id",["fk_statut" => 2, "fk_user_assign" => $profile->getId()]);

            //$this->info = $response->json();

            //Redirigimos al callcenter
            return redirect('https://consultups.my3cx.es/webclient/#/call?phone='.$request->input('phone'));
        }
        else{
            //Cerramos el ticket
            $apiKey = session('token');
            Http::withHeaders([
                'Accept' => 'application/json',
                'DOLAPIKEY' => $apiKey,
            ])->put("https://erp.consultups.tech/api/index.php/tickets/$id",["fk_statut" => 8]);

            //Recargamos la página
            return redirect(url()->previous());
        }
    }
}
