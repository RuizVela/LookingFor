@extends('layouts.app')
@section('content')
<div class="main">
    <form enctype="multipart/form-data" action="/game/{{$game->id}}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="name" value="{{$game->name}}">
        <input type="file" name="image">
        <input type="submit" value="Editar">
    </form>
    <form method="POST" action="/game/{{$game->id}}">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar">
    </form>
    <form method="POST" action="/game/{{$game->id}}/deleteImage">
        @csrf 
        @method('delete')
        <input type="submit" value="Borrar Imagen">
    </form>
</div>
@endsection