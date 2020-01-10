<form action="/answer" method="POST">
@csrf
<label>Responder:</label>
    <input required type="text" name="body">
    <br>
    <input type="hidden" name="user_id" value="{{auth()->id()}}">
    <input type="hidden" name="offer_id" value="{{$offer->id}}">
    <input type="submit" value="Enviar">
</form>

