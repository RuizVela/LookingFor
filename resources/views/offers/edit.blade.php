@extends('layouts.app')
@section('content')
<div class="main">
    <form method='POST' action="/offer/{{$offer->id}}">
        @csrf
    @method('patch')
    <p>Nombre: <input required type="text" name="title" value="{{$offer->title}}"> </p>
    <p>Descripción: <input type="text" name="description"value="{{$offer->description}}"> </p>
    <input type="submit" value="Editar">
</form>
</div>
@endsection