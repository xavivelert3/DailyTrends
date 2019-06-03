<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{

	protected $fillable = ["titulo","body","image","source","publisher"];

    	public function obtenerFeedsElPais($url){

		$feedArray = array();
		$xml = file_get_contents($url);
		$xml = str_replace("<content:encoded>","<contentEncoded>",$xml);
		$xml = str_replace("</content:encoded>","</contentEncoded>",$xml);
		$xml = str_replace("<dc:creator>","<dcCreator>",$xml);
		$xml = str_replace("</dc:creator>","</dcCreator>",$xml);
		$noticias = simplexml_load_string($xml);

		if ($noticias === false) {
			return false;
		}

		$x=0;
		foreach ($noticias->channel->item as $noticia) {
			$feedArray[$x]['titulo'] = (string)$noticia->title;
			$feedArray[$x]['body'] = (string)$noticia->contentEncoded;
			$feedArray[$x]['image'] = (string)$noticia->enclosure->attributes();
			$feedArray[$x]['source'] = (string)$noticia->link;
			$feedArray[$x]['publisher'] = (string)$noticia->dcCreator;
			$x++;

		}
		//$jsonFeeds = json_encode($feedArray, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
		return $feedArray;
	}

	public function obtenerFeedsElMundo($url){

		$feedArray = array();
		$xml = file_get_contents($url);
		$xml = str_replace("<media:content","<mediaContent",$xml);
		$xml = str_replace("<dc:creator>","<dcCreator>",$xml);
		$xml = str_replace("</dc:creator>","</dcCreator>",$xml);
		$noticias = simplexml_load_string($xml);

		if ($noticias === false) {
			return false;
		}

		$x=0;
		foreach ($noticias->channel->item as $noticia) {
			$feedArray[$x]['titulo'] = (string)$noticia->title;
			$feedArray[$x]['body'] = (string)$noticia->description;
			$feedArray[$x]['image'] = (string)$noticia->mediaContent[0]['url'];
			$feedArray[$x]['source'] = (string)$noticia->link;
			$feedArray[$x]['publisher'] = (string)$noticia->dcCreator;
			$x++;

		}
		return $feedArray;
	}

	public function obtenerFeedsCurl($url){

		require_once 'Library/simplehtmldom_1_9/simple_html_dom.php';

		$portada = array();

		$html = file_get_html($url);

		$titulo = $html->find('h2[class=articulo-titulo]');
		$portada['tituloPortada'] = $titulo[2]->plaintext;

		$editor = $html->find('div[class=firma ]');
		$portada['publisherPortada'] = $editor[2]->plaintext;

		$entradilla = $html->find('p[class=articulo-entradilla]');
		$portada['bodyPortada'] = $entradilla[1]->plaintext;

		$foto = $html->find('img[width=1200]'); 
		$portada['imagePortada'] = $foto[1]->getAttribute('data-src');

		$portada['sourcePortada'] = "EL PAIS";

		return $portada;
		
	}

}
