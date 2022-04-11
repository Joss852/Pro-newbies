<div class="col-md-4 d-flex">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title">
                <i class="fas fa-users"></i> Modulo Usuarios</a>
            </h2>
        </div>
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="users" @if (kvfj($user->permissions, 'users'))
                checked
                @endif> <label for="users">Puede ver el listado de usuarios</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="user_edit" @if (kvfj($user->permissions, 'user_edit'))
                checked
                @endif> <label for="user_edit">Puede editar usuarios</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="user_banned" @if (kvfj($user->permissions, 'user_banned'))
                checked
                @endif> <label for="user_banned">Puede bannear usuarios</label>
            </div>
            <div class="form-check">
                <input type="checkbox" value="true" name="user_permissions" @if (kvfj($user->permissions, 'user_permissions'))
                checked
                @endif> <label for="user_permissions">Puede editar los permisos</label>
            </div>
        </div>
    </div>
</div>