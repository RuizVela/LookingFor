<form method="GET" action="/main">
    <input type="submit" value="Página principal">
</form>

    Nombre: {{$user->name}}<br>
    Descripción: {{$user->description}}<br>

@if(count($groups))
<table>
Equipos a los que pertenece:
<tr>
    @foreach($groups as $group)<td>
    <form method="GET" action="/group/{{$group->id}}">
        <input type="submit" value="{{$group->name}}">
    </form></td>
    @endforeach
</tr>
</table>
@endif

@can('edit',$profile ?? $user)
    <form method="GET" action="/profile/{{$user->id}}/edit">
        <input type="submit" value="Editar Perfil">
    </form>
@endcan

<form method="GET" action="/user{{$user->id}}/addToClub">
    <input type="submit" value="Añadir a Club">
</form>
<form method="GET" action="/user{{$user->id}}/addToGroup">
    <input type="submit" value="Añadir a equipo">
</form>
<form method="GET" action="/user{{$user->id}}/kick">
    <input type="submit" value="Sacar de un equipo">
</form>

@include('comments.list',['comments'=>$user->comments])
@include('comments.create')