@extends('admin.master')

@section('title', 'Permisos de Usuarios')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users/all') }}" class="nav-link"><i class="fas fa-user"></i> Usuarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users/all') }}" class="nav-link"><i class="fas fa-cogs"></i>
            Permisos de Usuarios: {{ $user->name }} {{ $user->lastname }} (ID:{{ $user->id }}) </a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page_user">
            <form action="{{url('/admin/user/' . $user->id . '/permissions')}}" method="post">
                @csrf
                <div class="row">
                    @include('admin.users.permissions.module_products')
                    @include('admin.users.permissions.module_users')
                    @include('admin.users.permissions.module_categories')
                </div>
                <div class="row mtop16">
                    @include('admin.users.permissions.module_dashboard')
                </div>
                <div class="row mtop16">
                    <div class="col-md-12">
                        <div class="panel shadow">
                            <div class="inside">
                                <div class="btns">
                                    <input type="submit" value="Guardar" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
