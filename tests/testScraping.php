<?php
require '../app/Library/simplehtmldom_1_9/simple_html_dom.php';


$html = file_get_html('https://elpais.com/');



$titulo = $html->find('h2[class=articulo-titulo]');
$titloPortada = $titulo[2]->plaintext;
$editor = $html->find('div[class=firma ]');
$editorPortada = ($editor[2]->plaintext);
$entradilla = $html->find('p[class=articulo-entradilla]');
$entradillaPortada =$entradilla[1]->plaintext;
$foto = $html->find('img[width=1200]'); 
$fotoPortada = $foto[1]->getAttribute('data-src');


echo $titloPortada."\n";
echo $editorPortada."\n";
echo $entradillaPortada."\n";
echo $fotoPortada."\n";

?>