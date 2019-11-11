@foreach ($games as $game)
    {{$game->name}}<br>
    <form action="game/{{$game->id}}/edit"
        method="GET"> 
        <input type="submit" value="Editar">
    </form>
    
@endforeach

