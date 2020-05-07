{{-- Al hacerle un "extend" heredo las secciones que cree en la plantilla maestra--}}

@extends('layouts.master')
{{-- ------------------------- --}}
{{-- ------------------------- --}}

{{-- el @yield lo que me permite es sustituir la variable por el texto que yo le pase 
	En la plantilla maestra cree un YIELD en dentro del titulo de la pagina
	POr eso me permite ingresar el texto que yo quiera--}}

@section('title','Curso Laravel Mauro')

{{-- ------------------------- --}}
{{-- ------------------------- --}}

{{-- Se hace lo mismo con cada seccion para incluir informacion nueva--}}
@section('header')
	{{-- Si deseo conservar el contenido de la plantilla maestra y agregar contenido nuevo agrego el @parent--}}
	@parent
	<h1>Cabecera del Hola Mundo</h1>	
@stop
{{-- ------------------------- --}}
{{-- ------------------------- --}}

@section('content')
	<p>Contenido de la seccion</p>
@stop

@section('footer')
	@parent
	<h3>Este es el footerde la plantilla</h3>
@stop