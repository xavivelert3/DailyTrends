<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listado Noticias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    	<div class="container">
    		<div class="row" style="margin: 5% 0;">
		    	<div class='col-sm'><a style="text-decoration: underline;" class="primary" href="{{ url('/') }}">Home</a></div>
		    	<div class='col-sm'><a style="text-decoration: underline;" class="primary" href="{{ url('/feeds/create') }}">Nueva Noticia</a></div>
		    	<div class='col-sm'><a style="text-decoration: underline;" class="primary" href="{{ url('/feeds/') }}">Editar Noticia</a></div>
		    	<div class='col-sm'><a style="text-decoration: underline;" class="primary" href="{{ url('/feeds/') }}">Eliminar Noticia</a></div>
		    	<div class='col-sm'><a style="text-decoration: underline;" class="primary" href="{{ url('/buscarPortada') }}">Buscar Noticia</a></div>

		    </div>
    		<div class="row">
		    	<div class='col'>
			    	<table class="table">
			    		<tr><th>EL PAIS</th></tr>
			    		<?php
			    									

			    			$salida = "";
			    			$x=0;
			    			foreach ($noticiasPais as $value) {
			    			
								$salida .= "<tr><td><a data-toggle='collapse' href=\".collapseP".$x."\" aria-expanded='false' aria-controls=\".collapseP".$x."\" >".$value['titulo']."</a></td></tr>";
								$salida .= "<tr class=\"collapseP".$x." collapse\"><td><div >".$value['body']."</div></td></tr>";
								$salida .= "<tr class=\"collapseP".$x." collapse\"><td><img src=\" ".$value['image']." \" ></td></tr>";
								$salida .= "<tr class=\"collapseP".$x." collapse\"><td><a target='_blank' href=\" ".$value['source']." \">Fuente<a></td></tr>";
								$salida .= "<tr class=\"collapseP".$x." collapse\"><td>".$value['publisher']."</td></tr>";
								$x++;
								if($x > 4){
									break;
								}
							}
							echo $salida;

			    		?>
			    	</table>
		    	</div>
		    	<div class='col'>
		    	<table class="table">
		    		<tr><th>EL MUNDO</th></tr>
		    		<?php

			    			$salida = "";
			    			$x=0;
			    			foreach ($noticiasMundo as $value) {
			    			
								$salida .= "<tr><td><a data-toggle='collapse' href=\".collapseM".$x."\" aria-expanded='false' aria-controls=\".collapseM".$x."\" >".$value['titulo']."</a></td></tr>";
								$salida .= "<tr class=\"collapseM".$x." collapse\"><td><div >".$value['body']."</div></td></tr>";
								if($value['image'] <> ''){
									$salida .= "<tr class=\"collapseM".$x." collapse\"><td><img src=\" ".$value['image']." \"></td></tr>";
								}
								$salida .= "<tr class=\"collapseM".$x." collapse\"><td><a target='_blank' href=\" ".$value['source']." \">Fuente<a></td></tr>";
								$salida .= "<tr class=\"collapseM".$x." collapse\"><td>".$value['publisher']."</td></tr>";
								$x++;
								if($x > 4){
									break;
								}
							}
							echo $salida;

			    		?>
		    	</table>
		    	</div>

		    	<div class='col'>
		    	<table class="table">
		    		<tr><th>PERSONALES</th></tr>
		    		<?php
			    			$salida = "";
			    			$x=0;
			    			foreach ($noticiasPers as $value) {

								$salida .= "<tr><td><a data-toggle='collapse' href=\".collapseX".$x."\" aria-expanded='false' aria-controls=\".collapseX".$x."\" >".$value['titulo']."</a></td></tr>";
								$salida .= "<tr class=\"collapseX".$x." collapse\"><td><div >".$value['body']."</div></td></tr>";
								if($value['image'] <> ''){
									$salida .= "<tr class=\"collapseX".$x." collapse\"><td><img width='360' height='257' src=\" ".$value['image']." \"></td></tr>";
								}
								$salida .= "<tr class=\"collapseX".$x." collapse\"><td><a target='_blank' href=\" ".$value['source']." \">Fuente<a></td></tr>";
								$salida .= "<tr class=\"collapseX".$x." collapse\"><td>".$value['publisher']."</td></tr>";
								$x++;
							}
							echo $salida;

			    		?>
		    	</table>
		    	</div>
	    	</div>
		</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>