@extends('layouts.app')
@section('content')
<div class="main">
    <form method="GET" action="/group">
        <input type="submit" value="Mostrar Equipos">
</form>
<form method="GET" action="/profile">
    <input type="submit" value="Mostrar Perfiles">
</form>
<form method="GET" action="/offer/create">
    <input type="submit" value="Crear Oferta">
</form>

@foreach ($offers as $offer)
<li> {{$offer->title}}
    <form method="GET" action="/offer/{{$offer->id}}">
        <input type="submit" value="Mostrar Oferta">
    </form>
</li>
@endforeach
</div>
@endsection