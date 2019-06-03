@extends("../layouts.plantilla")
<title>Editar Noticia</title>

@section("cabecera")
<h2 style="margin:5% 0; text-align: center;">EDITAR NOTICIA</h2>
@endsection
@section("cuerpo")

<form method="POST" action="/feeds/{{$feeds->id}}">
	<input type="hidden" name="_method" value="PUT">
	<div class="row">
		<div class="col-2">
			<p>Título:</p>
		</div>
		<div class="col-8">
			    <input class="form-control" value="{{$feeds->titulo}}" type="text" name="titulo">
		</div>
	</div>
	<div class="row">

		<div class="col-2">
			<p>Noticia:</p>
		</div>
		<div class="col-8">
				<textarea class="form-control" name="body">{{$feeds->body}}</textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<p>Imagen:</p>
		</div>
		<div class="col-8">		
				<input class="form-control" placeholder="URL https:\\..." type="text" value="{{$feeds->image}}" name="image">
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<p>Fuente:</p>
		</div>
		<div class="col-8">	
				<input class="form-control" type="text" value="{{$feeds->source}}" name="source">
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<p>Editor:</p>
		</div>
		<div class="col-8">	
			    <input class="form-control" type="text" value="{{$feeds->publisher}}" name="publisher">
		</div>
	</div>
			    
	<div class="row">
		<div class="col-2">
			    <button class='btn btn-success' type="submit" name="enviar">Actualizar</button>
		</div>
	{{ csrf_field()}}
</form>
<form method="POST" action="/feeds/{{$feeds->id}}">
	<input type="hidden" name="_method" value="DELETE">
	<div class="col-2">
		<button class='btn  btn-danger' type="submit" name="enviar">Eliminar</button>
	</div>

{{ csrf_field()}}
</form>
</div>

@endsection
@section("pie")
@endsection