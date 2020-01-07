<h1>Juegos:</h1>
<table>
@foreach ($games as $game)
<form action="/game/{{$game->id}}" method="GET">
    <button type="submit" value="{{$game->name}}" style="margin:25px; background-color:transparent; border:none"> 
        <img src="{{url($game->imageUrl())}}" style="width:225px; height:300px; box-shadow: 2px 2px 20px #009">
        <br>
        {{$game->name}}
    </button>
</form>
@endforeach
</table>