<form method="POST" action="/group">
    @csrf
    <label>Nombre del grupo:</label>
    <input type="text" name="name">
    <br>
    <label>Descripción:</label>
    <input type="text" name="description">
    <br>
<input type="submit">
</form>
