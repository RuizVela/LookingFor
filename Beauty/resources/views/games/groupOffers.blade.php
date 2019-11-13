Ofertas de {{$game->name}}:<br><br>
@foreach ($gameGroupOffers as $gameGroupOffer)
    {{$gameGroupOffer->title}}<br>
    <form action="/offer/{{$gameGroupOffer->id}}" method="GET">
        <input type="submit" value="Mostrar oferta">
    </form>
@endforeach
<form action="/game/{{$game->id}}" method="GET">
<input type="submit" value="Volver a {{$game->name}}">
</form>