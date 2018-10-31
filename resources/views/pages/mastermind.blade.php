@extends('layouts.default')
@section('title', 'DW32 - Grupo 1 Laravel')
@section('content')
<br><br><br>
<h1>Mastermind</h1>
<h2>Jugador: {{$nombre}}</h2>

@for ($i=0; $i < $numEle; $i++)
<img width='32px' height='32px' src='images/{{$i}}.png'>
@endfor
<br>
<form action="jugar" method="post">
  @csrf
  @for ($i=0; $i < $lonEle; $i++)
  <select name="numJug{{$i}}">
    @for ($j=0; $j < $numEle; $j++)
    <option value="{{$j}}" {{$i==$j ? 'selected' : ''}}>{{($j+1)}}</option>
    @endfor
  </select>
  @endfor
  @for ($i=0; $i < $lonEle; $i++)
  <img width='32px' height='32px' src='images/{{$arrayEle[$i]}}.png'>
  @endfor
  <br>
  @if (isset($mensaje))
  <h2>{{$mensaje}}</h2>
  <input type="submit" name="jugar" value="Volver a jugar">
  @else
  <input type="submit" name="jugar" value="Comprobar">
  @endif

</form>
<br>
<p>Numero de intentos: {{$intentos}}</p>
@if(isset($turnos))
@foreach ($turnos as $turno)
@for ($i = 0; $i < count($turno['numJugador']);$i++)
<img width='32px' height='32px' src="images/{{$turno['numJugador'][$i]}}.png">
@endfor
<p>Aciertos: {{$turno['aciertos']}} Candidatos : {{$turno['candidatos']}}</p>
@endforeach

@endif
@stop
@section('enlaces')

@stop
