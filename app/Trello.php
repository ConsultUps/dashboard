<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Trello extends Model
{

    private $key;
    private $token;
    private $info;
    private $task;

    public function __construct($key='4ef60738628aa2b1ed37b05c689d1e9d', $token='cbee571504c9676192ffe464efee8ab1699471e9e0873d1757139b03d669ffde')
    {
        $this->key = $key;
        $this->token = $token;
        $this -> getInfo();
        //$this -> getID();
    }

    public function getInfo(){
        $response = Http::get("https://api.trello.com/1/members/me/boards?fields=name,url&key=$this->key&token=$this->token");
        $this->info = $response->json();
    }

    public function getID($name = 'Trabajo Final Práctica'){
        foreach ($this->info as $row){
            if($row['name'] == $name) return $row['id'];
        }
    }

    public function getURL($name = 'Trabajo Final Práctica'){
        foreach ($this->info as $row){
            if($row['name'] == $name) return $row['url'];
        }
    }

    public function getName($name = 'Trabajo Final Práctica'){
        foreach ($this->info as $row){
            if($row['name'] == $name) return $row['name'];
        }
    }

    public function pendingTasks(){
        $response = Http::get("https://api.trello.com/1/boards/".$this->getID()."/cards");
        foreach ($response->json() as $row){
            if($row['badges']['checkItems'] != 0){
                $array[$row['name']] = (int)(($row['badges']['checkItemsChecked'] * 100)/$row['badges']['checkItems']);
            }
        }
        return $array;
    }

    public function totalTasks(){
        $response = Http::get("https://api.trello.com/1/boards/".$this->getID()."/cards");
        $total = 0;
        $realizadas = 0;
        foreach($response->json() as $row){
            if($row['badges']['checkItems'] != 0){
                $total = $total + $row['badges']['checkItems'];
                $realizadas = $realizadas + $row['badges']['checkItemsChecked'];
            }
        }
        return (int)(($realizadas * 100)/$total);
    }
}
