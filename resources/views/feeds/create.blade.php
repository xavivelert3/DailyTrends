@extends("../layouts.plantilla")
<title>Nueva Noticia</title>

@section("cabecera")
<h2 style="margin:5% 0; text-align: center;">CREAR NUEVA NOTICIA</h2>
@endsection
@section("cuerpo")
<form method="POST" action="/feeds">

	<div class="row">
		<div class="col-2">
			<p>Título:</p>
		</div>
		<div class="col-8">
			    <input class="form-control" type="text" name="titulo">
		</div>
	</div>
	<div class="row">

		<div class="col-2">
			<p>Noticia:</p>
		</div>
		<div class="col-8">
				<textarea class="form-control" name="body"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<p>Imagen:</p>
		</div>
		<div class="col-8">		
				<input class="form-control" placeholder="URL https:\\..." type="text" name="image">
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<p>Fuente:</p>
		</div>
		<div class="col-8">	
				<input class="form-control" type="text" name="source">
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<p>Editor:</p>
		</div>
		<div class="col-8">	
			    <input class="form-control" type="text" name="publisher">
		</div>
	</div>
			    {{ csrf_field()}}
			    <button class='btn btn-success' type="submit" name="enviar">Enviar</button>

	
</form>

@endsection
@section("pie")
@endsection