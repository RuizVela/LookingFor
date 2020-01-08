@extends('layouts.app')
@section('content')
<div class="main">
    Equipos que juegan a {{$game->name}}:<br><br>
    @foreach ($gameGroups as $gameGroup)
    
    <form action="/group/{{$gameGroup->id}}" method="GET">
        <input type="submit" value="{{$gameGroup->name}}">
    </form>
@endforeach
<form action="/game/{{$game->id}}" method="GET">
    <input type="submit" value="Volver a {{$game->name}}">
</form>
</div>
@endsection