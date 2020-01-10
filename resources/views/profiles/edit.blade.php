@extends('layouts.app')
@section('content')
<div class="main">
<form method='POST' action="/profile/{{$user->id}}">
    @csrf
    @method('patch')
    <p>Nombre: <input required type="text" name="name" value="{{$user->name}}"> </p>
    <p>Email: <input type="text" name="email" required value="{{$user->email}}"> </p>
    <p>Descripción: <input type="text" name="description" value="{{$user->description}}"> </p>
    <input type="submit" value="Editar">
</form>
</div>
@endsection