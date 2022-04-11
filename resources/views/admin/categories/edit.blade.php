@extends('admin.master')

@section('title', 'Editar Categoria')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/categories/'.$cat->module) }}" class="nav-link"><i class="fas fa-folder"></i>Categorias</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/category/'.$cat->id.'/edit') }}" class="nav-link">{!!htmlspecialchars_decode($cat->icon)!!}{{$cat->name}}</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title">
                            <i class="fas fa-edit"></i>Editar categoria
                        </h2>
                    </div>
                    <div class="inside">
                        {!! Form::open(['url' => '/admin/category/'.$cat->id.'/edit']) !!}
                        <label for="name">Nombre de la categoria:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                            {!! Form::text('name',$cat->name, ['class' => 'form-control']) !!}
                        </div>
                        <label for="module" class="mtop16">Modulo:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-folder"></i></span>
                            {!! Form::select('module', getModulesArray(), $cat->module, ['class' => 'form-select']) !!}
                        </div>
                        <label for="icon" class="mtop16">Icono:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                            {!! Form::text('icon', $cat->icon, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-success mtop16']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
