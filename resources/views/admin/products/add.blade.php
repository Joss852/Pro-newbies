@extends('admin.master')

@section('title', 'Agregar Producto')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-boxes"></i>Productos</a></a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/product/add') }}" class="nav-link"><i class="fas fa-plus"></i> Agregar producto</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                    <i class="fas fa-plus"></i> Agregar producto
                </h2>
            </div>
            <div class="inside">
                {!! Form::open(['url' => '/admin/product/add','files' => true]) !!}

                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Nombre del producto:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="category">Categoria:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></span>
                            {!! Form::select('category',$cats,0, ['class'=>'form-select']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="img">Imagen Destacada:</label>
                        <div class="input-group">
                            {!! Form::file('img', ['class' => 'form-control','accept'=> 'image/*']) !!}
                        </div>
                    </div>
                </div>

                <div class="row mtop16">
                    <div class="col-md-3">
                        <label for="price">Precio:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                            {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="indiscount">¿Esta en descuento?:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></span>
                            {!! Form::select('indiscount',['0'=> 'No','1'=>'Si'],0, ['class'=>'form-select']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="discount">Descuento:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-percentage"></i></span>
                            {!! Form::number('discount', null, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                        </div>
                    </div>
                </div>
                <div class="row mtop16">
                    <div class="col-md-3">
                        <label for="quantity">Cantidad en existencia:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                            {!! Form::number('quantity', 0, ['class' => 'form-control', 'min' => '0']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="sku">Codigo de sistema:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                            {!! Form::text('sku', 0, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="row mtop16">
                    <div class="col-md-12">
                        <label for="content">Descripcion</label>
                        {!! Form::textarea('content', null, ['class' => 'form-control','id'=> 'editor']) !!}
                    </div>
                </div>

                <div class="row mtop16">
                    <div class="col-md-12">
                        {!! Form::submit('Guardar',['class'=> 'btn btn-success'])!!}
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
