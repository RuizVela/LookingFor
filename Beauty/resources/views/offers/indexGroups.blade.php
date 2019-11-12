<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>
<form method="GET" action="/group">
    <input type="submit" value="Mostrar Grupos">
</form>
<form method="GET" action="/profile">
    <input type="submit" value="Mostrar Perfiles">
</form>
<form method="GET" action="/offer/create">
    <input type="submit" value="Crear Oferta">
</form>
{{-- TODO quitar if y coger las ofertas en el modelo --}}
@foreach ($offers as $offer)
    @if ($offer->group_offer==TRUE)
        <li> {{$offer->title}}
            <form method="GET" action="/offer/{{$offer->id}}">
                <input type="submit" value="Mostrar Oferta">
            </form>
        </li>
    @endif
@endforeach



