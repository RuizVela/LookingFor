<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>
Nombre del club: {{$club->name}}<br>
Descripción: {{$club->description}}<br>
Miembros: 
@foreach($club->users as $user)
{{$user->name}}. 
@endforeach
@can('edit',$club)
<form method="GET" action="/club{{$club->id}}/addUser">
    <input type="submit" value="Añadir usuario a este club">
</form>
<form method="GET" action="/club{{$club->id}}/addGroup">
    <input type="submit" value="Añadir equipo a este club">
</form>
<form action="/club/{{$club->id}}/edit" method="GET"> 
        <input type="submit" value="Editar">
</form>
 @endcan
 @can('delete',$club)
<form method="POST" action="/club/{{$club->id}}">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar">
</form>
@endcan
@if(count($groups) )
<br>Equipos que pertenecen a este club:
    @foreach($groups as $group)
    <form method="GET" action="/group/{{$group->id}}">
        <input type="submit" value="{{$group->name}}">
    </form>
    @endforeach
@endif