@extends('layouts.app')
@section('content')
<div class="main">
    <form method="GET" action="/club/create">
        <input type="submit" value="Crear Club">
</form>
Lista de Clubs:
@foreach ($clubs as $club)
<form action="/club/{{$club->id}}" method="GET">
    <input type="submit" value="{{$club->name}}">
</form>
@endforeach
</div>
@endsection