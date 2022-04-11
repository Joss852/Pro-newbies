@extends('admin.master')

@section('title', 'Usuarios')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users') }}" class="nav-link"><i class="fas fa-users"></i> Usuarios</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                    <i class="fas fa-users"></i> Usuarios</a>
                </h2>
            </div>
            <div class="inside">
                <div class="row">
                    <div class="col-md-2 offset-md-10">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-filter"></i> Filtrar
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ url('/admin/users/all') }}"><i
                                            class="fas fa-stream"></i> Todos</a></li>
                                <li><a class="dropdown-item" href="{{ url('/admin/users/0') }}"><i
                                            class="fas fa-unlink"></i> No Verificados</a></li>
                                <li><a class="dropdown-item" href="{{ url('/admin/users/1') }}"><i
                                            class="fas fa-user-check"></i> Verificados</a></li>
                                <li><a class="dropdown-item" href="{{ url('/admin/users/100') }}"><i
                                            class="fas fa-heart-broken"></i> Suspendidos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <table class="table table-striped mtop16">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Estado</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ getUserStatusArray($user->status) }}</td>
                                <td>{{ getRolesUserArray($user->rol) }}</td>
                                <td>
                                    <div class="opc">
                                        @if(kvfj(Auth::user()->permissions,'user_edit'))
                                            <a href="{{ url('/admin/user/' . $user->id . '/edit') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i
                                                    class="fas fa-user-edit"></i></a>
                                        @endif
                                        @if(kvfj(Auth::user()->permissions,'user_permissions'))
                                            <a href="{{ url('/admin/user/' . $user->id . '/permissions') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Editar permisos"><i
                                                    class="fas fa-cogs"></i></a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
