@extends('connect.master')

@section('title', 'Register')

@section('content')
<br>
    <div class="box box_login shadow">
        <div class="header">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/images/logo.png') }}" alt="No se logro cargar"></a>
        </div>
        <div class="inside">
            {!! Form::open(['url' => '/register']) !!}

            <label for="name" class="form-label">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <label for="lastname" class="form-label mtop16">Apellido:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-tag"></i></span>
                </div>
                {!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <label for="email" class="form-label mtop16">Correo Electronico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                </div>
                {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
            </div>

            <label for="password" class="mtop16 form-label">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                </div>
                {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
            </div>

            <label for="cpassword" class="mtop16 form-label">Confirmar Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                </div>
                {!! Form::password('cpassword', ['class' => 'form-control', 'required']) !!}
            </div>

            {!! Form::submit('Registrarse', ['class' => 'btn btn-success mtop16']) !!}
            {!! Form::close() !!}

            @if (Session::has('message'))
        <div class="alert mtop16 alert-{{Session::get('typealert')}}" role="alert" style="display: none;">
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

            <div class="row footer mtop16">
                <a class="col" href="{{ url('/login') }}">Ya tengo una cuenta, Ingresar</a>
            </div>
        </div>
    </div>
@stop
