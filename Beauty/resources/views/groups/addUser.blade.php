<form method="GET" action="/group/{{$group->id}}">
    <input type="submit" value="Volver">
</form>

<form method="POST" action="/group{{$group->id}}/addUser">
    @csrf 
    @method('patch')
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">
                {{$user->name}}
            </option>
        @endforeach
    </select>
    <input type="submit" value="Añadir">
<form>