    
@extends('layouts.default')
@section('title', 'DW32 - Grupo 1 Laravel')
@section('content')
<br><br><br>
<h1>Configuracion</h1>
@if(isset($mensaje))
  <h2>{{$mensaje}}</h2>
@endif
@for ($i=0; $i < 8; $i++)
<img width='32px' height='32px' src='images/{{$i}}.png'>
@endfor

<form action="confMastermind" method="post">
  @csrf
  <label for="nombre">Jugador/a: </label>
  <input type="text" name="nombre" placeholder="Juanito">
  <br>
  <label for="lonEle">Longitud de la clave</label><br>
  <input type="radio" name="lonEle" value="4" checked>4
  <input type="radio" name="lonEle" value="5">5
  <br>
  <label for="numEle">Número de elementos a adivinar: </label><br>
  <input type="radio" name="numEle" value="4" checked>4
  <input type="radio" name="numEle" value="5">5
  <input type="radio" name="numEle" value="6">6
  <input type="radio" name="numEle" value="7">7
  <input type="radio" name="numEle" value="8">8
  <br>
  <label for="repeat">Permitir repetidos: </label><br>
  <input type="radio" name="repeat" value="1">Sí
  <input type="radio" name="repeat" value="0" checked>No
  <br>
  <label for="numInt">Número de intentos: </label><br>
  <select name="numInt">
    <option value="4">4</option>
    <option value="6">6</option>
    <option value="8">8</option>
    <option value="10">10</option>
  </select>
  <br>
  <input type="submit" value="Enviar" name="enviar">
</form> 
@stop
@section('enlaces')

@stop
