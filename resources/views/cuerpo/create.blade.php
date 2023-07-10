@extends('plantilla.plantilla')

@section('content')

<h1>formulario de cuerpo</h1>

<form action="{{route('store')}}" method="POST">

@csrf
    <label>

        denomicacion

    
        <input type="text" name="denom_ce">
    </label>

    <button type="submit">enviar</button>

</form>
    
@endsection
