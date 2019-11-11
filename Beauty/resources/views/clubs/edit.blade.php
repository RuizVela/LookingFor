<form action="/club/{{$club->id}}" method="POST">
    @csrf
    @method('patch')
    <input type="text" name="name" value="{{$club->name}}">
    <input type="text" name="description" value="{{$club->description}}">
    <input type="submit" value="Editar">
</form>