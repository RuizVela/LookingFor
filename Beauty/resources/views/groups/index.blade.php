<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>

<form method="GET" action="/group/create">
<input type="submit" value="Crear Equipo">
</form>

@foreach ($groups as $group)
<form method="GET" action="/group/{{$group->id}}">
<input type="submit" value="{{$group->name}}">
</form>

@endforeach