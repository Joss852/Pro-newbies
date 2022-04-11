@extends('admin.master')

@section('title', 'Usuarios')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users/all') }}" class="nav-link"><i class="fas fa-user"></i> Usuarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/user/' . $user->id . '/edit') }}" class="nav-link"><i class="fas fa-user-edit"></i>
            Editar Usuario</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page_user">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-user"></i> Informacion de Usuario</a>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="mini_profile">
                                @if (is_null($user->avatar))
                                    <img src="{{ url('static/images/default_avatar.jpg') }} " class="avatar">
                                @else
                                    <img src="{{ url('uploads/user/' . $user->id . '/' . $user->avatar) }} "
                                        class="avatar">
                                @endif
                                <div class="info">
                                    <span class="title"><i class="far fa-id-card"></i> Nombre:</span>
                                    <span class="text">{{ $user->name }} {{ $user->lastname }}</span>
                                    <span class="title"><i class="fas fa-user-tie"></i> Estado del Usuario:</span>
                                    <span class="text">{{ getUserStatusArray($user->status) }}</span>
                                    <span class="title"><i class="far fa-envelope"></i> correo Electronico:</span>
                                    <span class="text">{{ $user->email }}</span>
                                    <span class="title"><i class="far fa-calendar-alt"></i> Fecha de
                                        registro:</span>
                                    <span class="text">{{ $user->created_at }}</span>
                                    <span class="title"><i class="fas fa-user-shield"></i> Rol del Usuario:</span>
                                    <span class="text">{{ getRolesUserArray($user->rol) }}</span>
                                </div>
                                @if (kvfj(Auth::user()->permissions, 'user_banned'))
                                    @if ($user->status == '100')
                                        <a href="{{ url('admin/user/' . $user->id . '/banned') }}"
                                            class="btn btn-success">Quitar suspension</a>
                                    @else
                                        <a href="{{ url('admin/user/' . $user->id . '/banned') }}"
                                            class="btn btn-danger">Suspender
                                            Usuario</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-user-edit"></i> Editar Informacion</a>
                            </h2>
                        </div>
                        <div class="inside">
                            @if (kvfj(Auth::user()->permissions, 'user_edit'))
                                {!! Form::open(['url' => '/admin/user' . $user->id . '/edit']) !!}

                                <div class="col-md-6">
                                    <label for="user_type">Tipo de usuario:</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-folder"></i></span>
                                        {!! Form::select('user_type', getRolesUserArray('0', true), $user->rol, ['class' => 'form-select']) !!}
                                    </div>
                                </div>
                                <div class="row mtop16">
                                    <div class="col-md-12">
                                        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
