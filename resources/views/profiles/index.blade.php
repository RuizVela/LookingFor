@extends('layouts.app')
@section('content')
<div class="main">
@foreach ($profiles as $profile)
<ul> {{$profile->name}}<form method="GET" action="/profile/{{$profile->id}}">
    <input type="submit" value="Mostrar">
</form></ul>
@endforeach
</div>
@endsection