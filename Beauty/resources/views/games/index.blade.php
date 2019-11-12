Lista de Juegos:<br>
@foreach ($games as $game)
    
<form action="/game/{{$game->id}}" method="GET">
    <input type="submit" value="{{$game->name}}"> <br>
</form>
@endforeach