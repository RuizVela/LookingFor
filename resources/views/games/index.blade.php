<table>
@foreach ($games as $game)
<form action="/game/{{$game->id}}" method="GET">
    <button class="game_button" type="submit" value="{{$game->name}}"> 
        <img class="game_image" src="{{url($game->imageUrl())}}">
        <br>
        {{$game->name}}
    </button>
</form>
@endforeach
</table>