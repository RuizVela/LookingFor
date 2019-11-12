<form method="GET" action="/profile">
<input type="submit" value="Mostrar Perfiles">
</form>
<form method="GET" action="/club">
    <input type="submit" value="Mostrar Clubs">
    </form>
    {{-- TODO borrar comentarios --}}
{{-- <form method="GET" action="/group">
<input type="submit" value="Mostrar Grupos">
</form>
<form method="GET" action="/offer">
<input type="submit" value="Lista de Ofertas de Individuos">
</form>
<form method="GET" action="/index">
<input type="submit" value="Lista de Ofertas de Grupos">
</form> --}}
@include('games.index')