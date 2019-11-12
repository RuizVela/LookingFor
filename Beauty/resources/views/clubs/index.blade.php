@foreach ($clubs as $club)
    {{$club->name}}<br>
    <form action="/game/{{$club->id}}/edit"
        method="GET"> 
        <input type="submit" value="Editar">
    </form>
    
@endforeach