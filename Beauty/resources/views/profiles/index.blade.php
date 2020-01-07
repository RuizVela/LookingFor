@extends('layouts.app')
@section('content')
<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>
Lista de Perfiles:
@foreach ($profiles as $profile)
<li> {{$profile->name}}<form method="GET" action="/profile/{{$profile->id}}">
    <input type="submit" value="Mostrar">
</form></li>
@endforeach
@endsection