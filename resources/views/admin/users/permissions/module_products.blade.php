<div class="col-md-4 d-flex">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title">
                <i class="fas fa-boxes"></i> Modulo Productos</a>
            </h2>
        </div>
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="products"@if (kvfj($user->permissions, 'products'))
                checked
                @endif> <label for="products"> Puede ver el listado de productos</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="product_add"@if (kvfj($user->permissions, 'product_add'))
                checked
                @endif> <label for="product_add"> Puede agregar nuevos productos</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="product_edit"@if (kvfj($user->permissions, 'product_edit'))
                checked
                @endif> <label for="product_edit"> Puede editar los productos</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="product_delete"@if (kvfj($user->permissions, 'product_delete'))
                checked
                @endif> <label for="product_delete"> Puede eliminar los productos</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="product_search"@if (kvfj($user->permissions, 'product_search'))
                checked
                @endif> <label for="product_search"> Buscar Productos</label>
            </div>
            
            <div class="form-check">
                <input type="checkbox" value="true" name="product_gallery_add"@if (kvfj($user->permissions, 'product_gallery_add'))
                checked
                @endif> <label for="product_gallery_add"> Puede agregar imagenes en la galeria</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="product_gallery_delete"@if (kvfj($user->permissions, 'product_gallery_delete'))
                checked
                @endif> <label for="product_gallery_delete"> Puede eliminar imagenes en la galeria</label>
            </div>
            
        </div>
    </div>
</div>
