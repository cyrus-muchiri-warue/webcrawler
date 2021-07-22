<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class WebScrapper extends Controller
{
    //
    public $results=array();
   

    public function scrapper()
    {
        $url="https://www.worldometers.info/coronavirus/";
        $client =new Client();
        $page=$client->request('GET',$url);
       // echo $page->filter('.maincounter-number')->text();
        $page->filter("#maincounter-wrap")->each(function($item){
            $this->results[$item->filter("h1")->text()]=$item->filter(".maincounter-number")->text();
        });
       $datas= $this->results;
      return view('scrapper',compact('datas'));
    }
}
