<form method="GET" action="/main">
    <input type="submit" value="Página principal">
    </form>
    

<form action="/gameGroups/{{$game->id}}" method="GET">
    <input type="hidden" name="game_id" value="{{$game->id}}">
    <input type="submit" value="Mostrar equipos">
</form>

<form action="/gameGroupOffers/{{$game->id}}" method="GET">
    <input type="submit" value="Mostrar ofertas de equipos">
</form>
<form action="/gameUserOffers/{{$game->id}}" method="GET">
    <input type="submit" value="Mostrar ofertas de users">
</form>

@can('edit',$game)
 <form action="/game/{{$game->id}}/edit"
    method="GET"> 
    <input type="submit" value="Editar">
</form>
@endcan
@can('delete', $game)
<form action="/game/{{$game->id}}"
    method="POST"> 
    @csrf
    @method('delete')
    <input type="submit" value="Borrar">
</form>
@endcan