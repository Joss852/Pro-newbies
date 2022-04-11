@extends('admin.master')

@section('title', 'Editar Producto')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/products') }}" class="nav-link"><i class="fas fa-boxes"></i>Productos</a></a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/product/' . $p->id . '/edit') }}" class="nav-link"><i class="fas fa-edit"></i>
            Editar
            producto</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-9">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title">
                            <i class="fas fa-edit"></i> Editar producto
                        </h2>
                    </div>
                    <div class="inside">
                        {!! Form::open(['url' => '/admin/product/' . $p->id . '/edit', 'files' => true]) !!}

                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Nombre del producto:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                    {!! Form::text('name', $p->name, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="category">Categoria:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></span>
                                    {!! Form::select('category', $cats, $p->category_id, ['class' => 'form-select']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="img">Imagen Destacada:</label>
                                <div class="input-group">
                                    {!! Form::file('img', ['class' => 'form-control', 'accept' => 'image/*']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-3">
                                <label for="price">Precio:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-dollar-sign"></i></span>
                                    {!! Form::number('price', $p->price, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="indiscount">¿Esta en descuento?:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></span>
                                    {!! Form::select('indiscount', ['0' => 'No', '1' => 'Si'], $p->indiscount, ['class' => 'form-select']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="discount">Descuento:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fas fa-percentage"></i></span>
                                    {!! Form::number('discount', $p->discount, ['class' => 'form-control', 'min' => '0.00', 'step' => 'any']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="status">Estatus:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"></i></span>
                                    {!! Form::select('status', ['0' => 'Borrador', '1' => 'Publico'], $p->status, ['class' => 'form-select']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-3">
                                <label for="quantity">Cantidad en existencia:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                    {!! Form::number('quantity', $p->quantity, ['class' => 'form-control', 'min' => '0']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="sku">Codigo de sistema:</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-keyboard"></i></span>
                                    {!! Form::text('sku',$p->sku, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-12">
                                <label for="content">Descripcion</label>
                                {!! Form::textarea('content', $p->content, ['class' => 'form-control', 'id' => 'editor']) !!}
                            </div>
                        </div>

                        <div class="row mtop16">
                            <div class="col-md-12">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title">
                            <i class="fas fa-image"></i> Imagen Actual
                        </h2>
                    </div>
                    <div class="inside">
                        <a data-fancybox="gallery" href="{{ url('/uploads/' . $p->file_path . '/' . $p->image) }}">
                            <img class="img-fluid" src="{{ url('/uploads/' . $p->file_path . '/t_' . $p->image) }}">
                        </a>
                    </div>
                </div>
                <div class="panel shadow mtop16">
                    <div class="header">
                        <h2 class="title">
                            <i class="fas fa-images"></i> Galeria
                        </h2>
                    </div>
                    <div class="inside product_gallery">
                        {!! Form::open(['url' => '/admin/product/' . $p->id . '/gallery/add', 'files' => true, 'id' => 'form_product_gallery']) !!}
                        {!! Form::file('file_image', ['id' => 'product_file_image', 'accept' => 'image/*', 'style' => 'display:none;', 'required']) !!}
                        {!! Form::close() !!}
                        <div class="btn_submit">
                            @if(kvfj(Auth::user()->permissions,'product_gallery_add'))
                            <a href="#" id="btn_product_file_image"><i class="fas fa-plus"></i></a>
                            @endif
                        </div>
                        <div class="tumbs">
                            @foreach ($p->getGallery as $img)
                                <div class="tumb">
                                    @if(kvfj(Auth::user()->permissions,'product_gallery_delete'))
                                    <a href="{{ url('/admin/product/'.$p->id.'/gallery/'.$img->id.'/delete') }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Eliminar"><i class="fas fa-trash"></i>
                                    </a>
                                    @endif
                                    <img data-fancybox="gallery" height="100" src="{{url('/uploads/'.$img->file_path.'/t_'.$img->file_name)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    </div>

@endsection
