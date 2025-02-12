@extends('layouts.app')
@section('content')
<div class="commercial" id="commercial_left">
    @include('commercial_left')
</div>
<div class="commercial" id="commercial_right">
    @include('commercial_right')
</div>
<div class="in_image">
<img class="game_image" src="{{url($game->imageUrl())}}">
</div>
<div class="main">
<form action="/gameGroups/{{$game->id}}" method="GET">
    <input type="hidden" name="game_id" value="{{$game->id}}">
    <input type="submit" value="Mostrar equipos">
</form>

<form action="/gameGroupOffers/{{$game->id}}" method="GET">
    <input type="submit" value="Mostrar ofertas de equipos">
</form>
<form action="/gameUserOffers/{{$game->id}}" method="GET">
    <input type="submit" value="Mostrar ofertas de users">
</form>

@can('edit',$game)
<form action="/game/{{$game->id}}/edit"
    method="GET"> 
    <input type="submit" value="Editar">
</form>
@endcan
@can('delete', $game)
<form action="/game/{{$game->id}}"
    method="POST"> 
    @csrf
    @method('delete')
    <input type="submit" value="Borrar">
</form>
@endcan
</div>
@endsection