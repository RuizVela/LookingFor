@extends('layouts.app')
@section('content')
<div class="main">
<form action="/comment/{{$comment->id}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" name="body" value="{{$comment->body}}">
    <input type="hidden" name="profile_id" value="{{$comment->profile_id}}">
    <input type="hidden" name="user_id" value="{{$comment->user_id}}">
    <input type="submit" value="Editar">
</form>
</div>
@endsection