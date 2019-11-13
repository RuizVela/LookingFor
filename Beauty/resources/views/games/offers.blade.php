Ofertas de {{$game->name}}<br>
@foreach ($gameOffers as $gameOffer)
    {{$gameOffer->title}}<br>
    <form action="/offer/{{$gameOffer->id}}" method="GET">
        <input type="submit" value="Mostrar oferta">
    </form>
@endforeach
<form action="/game/{{$game->id}}" method="GET">
<input type="submit" value="Volver a {{$game->name}}">
</form>