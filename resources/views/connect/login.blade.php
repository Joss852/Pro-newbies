@extends('connect.master')

@section('title', 'Login')

@section('content')
    <div class="box box_login shadow">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/logo.png') }}" alt="No se logro cargar"></a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/login']) !!}

            <label for="email" class="form-label">Correo Electronico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                </div>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <label for="password" class="mtop16 form-label">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                </div>
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
            {!! Form::close() !!}

            @if (Session::has('message'))
        <div class="mtop16 alert alert-{{Session::get('typealert')}}" role="alert" style="display: none;">
            {{ Session::get('message') }}
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <script>
                $('.alert').slideDown();
                setTimeout(() => {
                    $('.alert').slideUp();
                }, 5000);
            </script>

        </div>
    @endif

            <div class="footer row mtop16">
                <a class="col" href="{{url('/register')}}">¿No tienes una cuenta?, Registrate</a>
                <a class="col" href="{{url('/recover')}}">Recuperar contraseña</a>
            </div>
        </div>
    </div>
@stop
