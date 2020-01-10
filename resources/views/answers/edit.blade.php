@extends('layouts.app')
@section('content')
<div class="main">
    <form action="/answer/{{$answer->id}}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="body" value="{{$answer->body}}">
        <input type="hidden" name="offer_id" value="{{$answer->offer->id}}">
        <input type="submit" value="Editar">
    </form>
</div>
@endsection