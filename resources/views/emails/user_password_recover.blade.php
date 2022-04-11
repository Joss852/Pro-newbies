@extends('emails.master')

@section('content')

    <p>Hola: <strong>{{ $name }}</strong></p>
    <p>Esto es un correo electrónico que le ayudara a restablecer su contraseña en esta grandiosa pagina de Pro-newbie.</p>
    <p>Para continuar haga clic en el siguiente botón e introduzca el siguiente código:</p>
    <h2 style="text-align: center;">
        <div style="background-color: #f0784070; display:inline-block; border:1px solid #8998AC; padding:5px;">
            {{ $code }}</div>
    </h2>

    <p style="text-align: center;"><a href="{{ url('/reset?email=' . $email) }}"
            style="display:inline-block;  background-color: #ee601e;color:#fff; text-decoration:none ;padding:8px; border-radius:4px;">Resetear
            mi contraseña</a></p>
    <p>Si botón no funciona copiar y pegar el siguiente url en su navegador:</p>
    <p>{{ url('/reset?email=' . $email) }}</p>
@stop
