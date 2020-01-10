@foreach ($answers as $answer)
    <li> {{$answer->user->name}}: {{$answer->body}}
    </li>
    <br>
    @can('edit',$answer)
        <form action="/answer/{{$answer->id}}/edit" method="GET">
            <input type="submit" value="Editar">
        </form>
    @endcan
    @can('delete',$answer)
        <form action="/answer/{{$answer->id}}" method="POST">
            @csrf 
            @method('delete')
            <input type="hidden" name="offer_id" value="{{$offer->id}}">
            <input type="submit" value="Eliminar">
        </form>
    @endcan
@endforeach
   
   