<?php 
namespace App\Library\FeedClass;

class feed {

	public $title;
	public $body;
	public $image;
	public $source;
	public $publisher;

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
			$feedArray[$x]['title'] = (string)$noticia->title;
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
			$feedArray[$x]['title'] = (string)$noticia->title;
			$feedArray[$x]['body'] = (string)$noticia->description;
			$feedArray[$x]['image'] = (string)$noticia->mediaContent[0]['url'];
			$feedArray[$x]['source'] = (string)$noticia->link;
			$feedArray[$x]['publisher'] = (string)$noticia->dcCreator;
			$x++;

		}
		return $feedArray;
	}


}