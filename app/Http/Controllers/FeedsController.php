<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;
use Illuminate\Routing\Controller as BaseController;

class FeedsController extends BaseController
{
	public function ultimasNoticias(){
		$urlElPais= "https://elpais.com/rss/elpais/portada.xml";
		$urlElMundo= "https://e00-elmundo.uecdn.es/elmundo/rss/portada.xml";

		$feed = new feed();
		$elPaisFeed = $feed->obtenerFeedsElPais($urlElPais);
		$elMundoFeed = $feed->obtenerFeedsElMundo($urlElMundo);
        $feeds = Feed::all(); 
    
		return view("listado", ["noticiasPais"=>$elPaisFeed, "noticiasMundo"=>$elMundoFeed, "noticiasPers"=>$feeds]);
	}

	public function buscarPortada(){

		$url = "https://elpais.com/";
		$feed = new feed();
		$elPaisFeed = $feed->obtenerFeedsCurl($url);
		return view("portada", ["noticiaPortada"=>$elPaisFeed]);
	}

}