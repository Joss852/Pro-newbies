@extends('admin.master')

@section('title', 'Categorias')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/categories') }}" class="nav-link"><i class="fas fa-folder"></i>Categorias</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title">
                            <i class="fas fa-plus"></i>Agregar categorias
                        </h2>
                    </div>
                    <div class="inside">
                        @if (kvfj(Auth::user()->permissions, 'category_add'))
                            {!! Form::open(['url' => '/admin/category/add']) !!}
                            <label for="name">Nombre de la categoria:</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                            <label for="module" class="mtop16">Modulo:</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-folder"></i></span>
                                {!! Form::select('module', getModulesArray(), 0, ['class' => 'form-select']) !!}
                            </div>
                            <label for="icon" class="mtop16">Icono:</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                {!! Form::text('icon', null, ['class' => 'form-control']) !!}
                            </div>
                            {!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title">
                            <i class="fas fa-folder"></i>Categorias
                        </h2>
                    </div>
                    <div class="inside">
                        <nav class="nav">
                            @foreach (getModulesArray() as $m => $k)
                                <a class="nav-link" href="{{ url('/admin/categories/' . $m) }}"><i
                                        class="fas fa-list-ul"></i> {{ $k }}</a>
                            @endforeach
                        </nav>
                        <table class="table table-striped nav-pills nav-fill mtop16">
                            <thead>
                                <tr>
                                    <th scope="col" width="32"></th>
                                    <th scope="col">Nombre</th>
                                    <th width="120"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cats as $cat)
                                    <tr>
                                        <td>{!! htmlspecialchars_decode($cat->icon) !!}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>
                                            <div class="opc">
                                                @if (kvfj(Auth::user()->permissions, 'category_edit'))
                                                    <a href="{{ url('/admin/category/' . $cat->id . '/edit') }}"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i
                                                            class="fas fa-edit"></i></a>
                                                @endif
                                                @if (kvfj(Auth::user()->permissions, 'category_delete'))
                                                    <a href="{{ url('/admin/category/' . $cat->id . '/delete') }}"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar"><i
                                                            class="fas fa-trash"></i></a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
