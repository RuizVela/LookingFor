<form method="POST" action="/group">
    @csrf
    <label>Nombre del grupo:</label>
    <input type="text" name="name">
    <br>
    <label>Descripción:</label>
    <input type="text" name="description">
    <br>

    {{-- TODO: definir $group para poder mandar game_id --}}
<input type="hidden" name="game_id" value="{{$group->game_id}}">

<input type="submit" value="Crear">
</form>
<form method="GET" action="/group">
    <input type="submit" value="Lista de grupos">
</form>