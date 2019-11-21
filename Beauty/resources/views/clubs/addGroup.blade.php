<form method="GET" action="/club/{{$club->id}}">
    <input type="submit" value="Volver">
</form>
{{-- TODO: esto no funciona --}}
<form method="POST" action="/club{{$club->id}}/addGroup">
    @csrf 
    @method('patch')
    <select name="group_id">
        @foreach ($groups as $group)
            <option value="{{$club->id}}">
                {{$group->name}}
            </option>
        @endforeach
    </select>
    <input type="submit" value="Añadir">
<form>