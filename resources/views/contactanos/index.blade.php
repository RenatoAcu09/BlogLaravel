@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje:</h1>

    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="5"></textarea>
        </label>
        <br>

        <button type="submit"> Enviar Correo</button>

    </form>


    @if (session('info'))

        <script>
            alert('{{ session('info') }}');

        </script>

    @endif
@endsection()
