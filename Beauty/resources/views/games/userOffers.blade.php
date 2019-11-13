Ofertas de {{$game->name}}:<br><br>
@foreach ($gameUserOffers as $gameUserOffer)
    {{$gameUserOffer->title}}<br>
    <form action="/offer/{{$gameUserOffer->id}}" method="GET">
        <input type="submit" value="Mostrar oferta">
    </form>
@endforeach
<form action="/game/{{$game->id}}" method="GET">
<input type="submit" value="Volver a {{$game->name}}">
</form>