<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>

@foreach ($profiles as $profile=>$value)
<li> {{$value->name}}<form method="GET" action="/profile/{{$value->id}}">
<input type="submit" value="Mostrar">
</form>
</li>
@endforeach