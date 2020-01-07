@extends('layouts.app')
@section('content')
<div class="main">
    <form method="POST" action="/club">
        @csrf
        <label>Nombre del club:</label>
        <input type="text" name="name">
        <br>
        <label>Descripción:</label>
        <input type="text" name="description">
        <br>
        <input type="submit" value="Crear">
    </form>
</div>
@endsection