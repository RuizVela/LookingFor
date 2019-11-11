<?php
    echo "Nombre del club: $club->name<br>";
    echo "Descripción: $club->description<br>";
?>

<form method="POST" action="/club/{{$club->id}}">
    @csrf
    @method('delete')
    <input type="submit" value="eliminar">
    </form>