@extends("../layouts.plantilla")
<title>Portada Noticia</title>
@section("cabecera")
<h2 style="margin:5% 0; text-align: center;">PORTADA ACTUAL</h2>
@endsection
@section("cuerpo")


<form method="POST" action="/feeds">



 	<div class='row'>
 		<div class='col-sm-12'><h3 style="text-align: center;">{{$noticiaPortada['tituloPortada']}}</h3></div>
 	</div>
 	<div class='row'>
 		<div class='col-sm-12'><span style="text-align: justify;">{{$noticiaPortada['bodyPortada']}}</span></div>
 	</div>
 	<div class='row'>
 		<div class='col-sm-12' style="margin:3% 0; text-align: center;"><img  width="600" height="350" src="{{ $noticiaPortada['imagePortada'] }}"> </div>
 	</div>

 	<div class='row'>
 		<div class='col-sm-12'><span style="font-style: italic;">{{$noticiaPortada['publisherPortada']}}</span>
 		</div>
 	</div>
 	<div class='row'>
 		<div class='col-sm-12'><h4>{{$noticiaPortada['sourcePortada']}}</h4></div>
 	</div>
	<div class='row'>
 		<div class='col-sm-12'>
 			<button type="submit" class="btn btn-success">Guardar Noticia</button>
 			&nbsp<a href="{{ url('/') }}"><button type="button" class='btn btn-info'>Volver</button></a>
 		</div>
 	</div>

 	 	<input type="hidden" name="titulo" value="{{ $noticiaPortada['tituloPortada'] }}">
 	 	<input type="hidden" name="body" value="{{ $noticiaPortada['bodyPortada'] }}">
 	 	<input type="hidden" name="image" value="{{ $noticiaPortada['imagePortada'] }}">
 	 	<input type="hidden" name="publisher" value="{{ $noticiaPortada['publisherPortada'] }}">
 	 	<input type="hidden" name="source" value="{{ $noticiaPortada['sourcePortada'] }}">

{{ csrf_field()}}

</form>

@endsection
@section("pie")
@endsection