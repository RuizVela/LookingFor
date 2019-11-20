<form method="GET" action="/club/{{$club->id}}">
    <input type="submit" value="Volver">
</form>

<form method="POST" action="/club{{$club->id}}/addUser">
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