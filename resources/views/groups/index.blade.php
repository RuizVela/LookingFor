@extends('layouts.app')
@section('content')
<div class="main">
    
    <form method="GET" action="/group/create">
<input type="submit" value="Crear Equipo">
</form>

@foreach ($groups as $group)
<form method="GET" action="/group/{{$group->id}}">
    <input type="submit" value="{{$group->name}}">
</form>
@endforeach
</div>
@endsection