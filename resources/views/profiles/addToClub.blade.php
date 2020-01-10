@extends('layouts.app')
@section('content')
<div class="main">
    
    <form method="POST" action="/user{{$user->id}}/addToClub">
        @csrf 
        @method('patch')
        <select name="club_id">
            @foreach ($clubs as $club)
            <option value="{{$club->id}}">
                {{$club->name}}
            </option>
            @endforeach
        </select>
        <input type="submit" value="Añadir">
    </form>
    <form method="GET" action="/profile/{{$user->id}}">
        <input type="submit" value="Volver">
</form>
</div>
@endsection