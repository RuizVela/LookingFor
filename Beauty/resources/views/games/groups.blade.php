Equipos que juegan a {{$game->name}}:<br><br>
@foreach ($gameGroups as $gameGroup)
    {{$gameGroup->name}}<br>
    <form action="/group/{{$gameGroup->id}}" method="GET">
        <input type="submit" value="Mostrar Equipo">
    </form>
@endforeach
<form action="/game/{{$game->id}}" method="GET">
<input type="submit" value="Volver a {{$game->name}}">
</form>