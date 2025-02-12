@extends('layouts.app')
@section('content')
<div class="main">
  <form method="POST" action="/offer">
    @csrf
  <label>Oferta</label>
  <input required type="text" name="title">
  <br>
  <label>Descripción:</label>
  <input required type="text" name="description">
  <br>
  <label>Tipo de Oferta</label>
  <select name="group_offer">
    <option value="0">Busco Equipo</option>
    <option value="1">Busco Integrante(s)</option>
  </select>
  <input type="hidden" name="user_id" value="{{auth()->id()}}">    
  <input type="submit">
</form>
<form action="/offer" method="GET">
  <input type="submit" value="Lista de Ofertas">
</form> 
</div>
@endsection