<form action="/game/{{$game->id}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" name="name" value="{{$game->name}}">
    <input type="submit" value="Editar">
</form>