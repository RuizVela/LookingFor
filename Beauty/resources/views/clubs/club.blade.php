<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>
Nombre del club: {{$club->name}}<br>
Descripción: {{$club->description}}<br>
<form action="/club/{{$club->id}}/edit" method="GET"> 
        <input type="submit" value="Editar">
</form>
<form method="POST" action="/club/{{$club->id}}">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar">
</form>

@if(count($groups) )
Equipos que pertenecen a este club:
    @foreach($groups as $group)
    <form method="GET" action="/group/{{$group->id}}">
        <input type="submit" value="{{$group->name}}">
    </form>
    @endforeach
@endif