<form method="GET" action="/main">
    <input type="submit" value="Página principal">
    </form>
    

<form action="/group" method="GET">
    <input type="hidden" name="game_id" value="{{$game->id}}">
    <input type="submit" value="Mostrar equipos">
</form>

<form action="/gameOffers/{{$game->id}}" method="GET">
    <input type="submit" value="Mostrar ofertas">
</form>

 <form action="/game/{{$game->id}}/edit"
    method="GET"> 
    <input type="submit" value="Editar">
</form>