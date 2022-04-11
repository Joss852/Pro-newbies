@extends('emails.master')

@section('content')

    <p>Hola: <strong>{{ $name }}</strong></p>
    <p>Esto es un correo electrónico con la nueva contraseña para que usted puda seguir disfrutando de hacer compras en esta grandiosa pagina de Pro-newbie.</p>
    <p>Su contraseña es la siguiente:</p>
    <h2 style="text-align: center;">
        <div style="background-color: #f0784070; display:inline-block; border:1px solid #8998AC; padding:5px;">
            {{ $password }}</div>
    </h2>

    <p style="text-align: center;"><a href="{{ url('/login') }}"
            style="display:inline-block;  background-color: #ee601e;color:#fff; text-decoration:none ;padding:8px; border-radius:4px;">Iniciar
            sesion</a></p>
    <p>Si botón no funciona copiar y pegar el siguiente url en su navegador:</p>
    <p>{{ url('/login') }}</p>
@stop
