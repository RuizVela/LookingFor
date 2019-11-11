<form method="POST" action="/game">
    @csrf
    <label>Nombre del juego:</label>
    <input type="text" name="name">
    <br>
    <label>Descripción:</label>
    <input type="text" name="description">
    <br>
<input type="submit" value="Crear">
</form>

