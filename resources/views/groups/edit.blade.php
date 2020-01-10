@extends('layouts.app')
@section('content')
<div class="main">
    <form method='POST' action="/group/{{$group->id}}">
        @csrf
        @method('patch')
        <p>Nombre: <input required type="text" name="name" value="{{$group->name}}"> </p>
        <p>Descripción: <input type="text" name="description"value="{{$group->description}}"> </p>
        <input type="submit" value="Editar">
    </form>
    </div>
        @endsection