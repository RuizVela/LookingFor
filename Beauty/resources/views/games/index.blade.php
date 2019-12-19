Lista de Juegos:<br>
<table>
@foreach ($games as $game)
<form action="/game/{{$game->id}}" method="GET">
    <button type="submit" value="{{$game->name}}" style="margin:25px"> 
        <img src="{{url($game->imageUrl())}}" style="width:150px; height:250px;">
        <br>
        {{$game->name}}
    </button>
</form>
@endforeach
</table>