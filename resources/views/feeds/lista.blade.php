@extends("../layouts.plantilla")
<title>Listado Noticias</title>
@section("cabecera")
<h2 style="margin:5% 0; text-align: center;">LISTA DE NOTICIAS</h2>
@endsection
@section("cuerpo")

<ul>
 @foreach($feeds as $feed)
 	<li><a href="{{ url('/feeds', [$feed->id]) }}">{{$feed->titulo}}</a></li>
 @endforeach
</ul>

@endsection
@section("pie")
@endsection