@extends('plantilla.plantilla')

@section('content')

<h1>formulario de servicio</h1>

<form action="{{route('store.servicio')}}" method="POST">

@csrf
    <label>

        acti_ser
        <input type="text" name="Acti_ser">
    </label>

    <button type="submit">enviar</button>

</form>
    
@endsection
