<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>
<form method="GET" action="/club/create">
        <input type="submit" value="Crear Club">
</form>
Lista de Clubs:
@foreach ($clubs as $club)
<form action="/club/{{$club->id}}" method="GET">
    <input type="submit" value="{{$club->name}}">
</form>
@endforeach