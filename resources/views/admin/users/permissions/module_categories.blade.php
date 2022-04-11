<div class="col-md-4 d-flex">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title">
                <i class="fas fa-folder"></i> Modulo Categorias</a>
            </h2>
        </div>
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="categories" @if (kvfj($user->permissions, 'categories'))
                checked
                @endif> <label for="categories">Puede ver la lista de categorias</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="category_add" @if (kvfj($user->permissions, 'category_add'))
                checked
                @endif> <label for="category_add">Puede agregar categorias</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="category_edit" @if (kvfj($user->permissions, 'category_edit'))
                checked
                @endif> <label for="category_edit">Puede editar categorias</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="category_delete" @if (kvfj($user->permissions, 'category_delete'))
                checked
                @endif> <label for="category_delete">Puede eliminar categorias</label>
            </div>
        </div>
    </div>
</div>