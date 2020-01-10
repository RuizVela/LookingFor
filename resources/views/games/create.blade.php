@extends('layouts.app')
@section('content')
<div class="main">
<form enctype="multipart/form-data" method="POST" action="/game">
    @csrf
    <label>Nombre del juego:</label>
    <input required type="text" name="name">
    <br>
    <input type="file" name="image">
<input type="submit" value="Crear">
</form>
</div>
@endsection