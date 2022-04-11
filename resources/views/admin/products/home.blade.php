@extends('admin.master')

@section('title', 'Productos')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-boxes"></i>Productos</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title">
                    <i class="fas fa-boxes"></i> Productos
                </h2>
                <ul>
                    @if (kvfj(Auth::user()->permissions, 'product_add'))
                        <li>
                            <a href="{{ url('/admin/product/add') }}">
                                <i class="fas fa-plus"></i> Agregar producto
                            </a>
                        </li>
                    @endif
                    <li><a href="">Filtrar <i class="fas fa-chevron-right"></i></a>
                        <ul>
                            <li><a href="{{ url('admin/products/1') }}"><i class="fas fa-globe-americas"></i>
                                    Publicados</a>
                            </li>
                            <li><a href="{{ url('admin/products/0') }}"><i class="fas fa-eraser"></i> Borradores</a></li>
                            <li><a href="{{ url('admin/products/trash') }}"><i class="fas fa-trash"></i> Eliminados</a>
                            </li>
                            <li><a href="{{ url('admin/products/all') }}"><i class="fas fa-list-ul"></i> Todos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="btn_search">
                            <i class="fas fa-search"></i> Buscar
                        </a>
                    </li>
                </ul>
            </div>
            <div class="inside">
                <div class="form_search" id="form_search">
                    {!! Form::open(['url' => '/admin/product/search']) !!}
                    <div class="row">
                        <div class="col-md-4">
                            {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su busqueda']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::select('filter', ['0' => 'Nombre', '1' => 'Sku'], 1, ['class' => 'form-select']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::select('status', ['0' => 'Borradores', '1' => 'Publicados'], 0, ['class' => 'form-select']) !!}
                        </div>
                        <div class="col-md-2">
                            {!! Form::submit('buscar', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="50">ID</th>
                            <th width="50">Sku</th>
                            <th width="96"></th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Existencia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->sku }}</td>
                                <td>
                                    <a data-fancybox="gallery"
                                        href="{{ url('/uploads/' . $p->file_path . '/' . $p->image) }}">
                                        <img class="rounded" width="96"
                                            src="{{ url('/uploads/' . $p->file_path . '/t_' . $p->image) }}">
                                    </a>
                                </td>
                                <td>{{ $p->name }} @if ($p->status == '0')
                                        <i class="fas fa-eraser" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Estado: Borrador"></i>
                                    @endif
                                </td>
                                <td>{{ $p->getCategory->name }}</td>
                                <td>{{ $p->price }}</td>
                                <td>{{ $p->quantity }}</td>
                                <td>
                                    <div class="opc">
                                        @if (kvfj(Auth::user()->permissions, 'product_edit'))
                                            <a href="{{ url('/admin/product/' . $p->id . '/edit') }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i
                                                    class="fas fa-edit"></i></a>
                                        @endif
                                        @if (kvfj(Auth::user()->permissions, 'product_delete'))
                                            @if (is_null($p->deleted_at))
                                                <a href="#" class="btn-delete" data-action="delete" data-path="admin/product"
                                                    data-object="{{ $p->id }}" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Eliminar"><i
                                                        class="fas fa-trash"></i></a>
                                            @else
                                            <a href="#" class="btn-delete" data-path="admin/product"
                                                    data-object="{{ $p->id }}" data-action="restore" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Restaurar"><i
                                                        class="fas fa-trash-restore"></i></a>

                                            @endif
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
