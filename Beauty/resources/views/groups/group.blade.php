<form method="GET" action="/main">
<input type="submit" value="Página principal">
</form>

Nombre de equipo: {{$group->name}}<br>
Descripción: {{$group->description}}<br>

@if($club != null)
Club al que pertenece:
<form action="/club/{{$club->id}}" method="GET">
    <input type="submit" value="{{$club->name}}">
</form>
@endif

<br>
A que juega este equipo: {{$game->name}}<br><br>

Administradores del equipo:<br>

@foreach($admins as $admin)
    {{$admin->name}}<br>
    
@endforeach

<br>
Miembros de este equipo:
<br>
@foreach ($group->users as $user)
<br>
{{$user->name}} 
<form method="GET" action="/profile/{{$user->id}}">
    <input type="submit" value="Mostrar">
</form>

@endforeach

@can('edit',$group)
<form method="GET" action="/group/{{$group->id}}/edit">
<input type="submit" value="Editar">
</form>
@endcan
@can('delete',$group)
<form method="POST" action="/group/{{$group->id}}">
@csrf
@method('delete')
<input type="submit" value="eliminar">
</form>
@endcan