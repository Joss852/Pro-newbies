<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
    }

    public function getUsers($status)
    {
        if ($status == 'all') {
            $users = User::orderby('id', 'Desc')->paginate(25);
        } else {
            $users = User::where('status', $status)->orderby('id', 'Desc')->paginate(25);
        }
        $data = ['users' => $users];
        return view('admin.users.home', $data);
    }

    public function getUserEdit($id)
    {
        $user = User::findOrFail($id);
        $data = ['user' => $user];
        return view('admin.users.edit', $data);
    }
    public function getUserDelete($id){
        $product = Product::findOrFail($id);
        if ($product->delete()) {
            return back()->with('message', 'Se ha borrado El producto')->with('typealert', 'success');
        }
    }

    public function getUserBanned($id)
    {
        $user = User::findOrFail($id);
        if ($user->status == '100') {
            $user->status = '0';
            if ($user->save()) {
                return back()->with('message', 'Se ha activado el usuario Correctamente')->with('typealert', 'success');
            } else {
                return back()->with('message', 'No se ha logrado activar el usuario Correctamente')->with('typealert', 'danger');
            }
        } else {
            $user->status = '100';
            if ($user->save()) {
                return back()->with('message', 'Se ha suspendido al usuario')->with('typealert', 'warning');
            } else {
                return back()->with('message', 'No se ha logrado suspender al usuario Correctamente')->with('typealert', 'danger');
            }
        }
    }

    public function getUserPermissions($id)
    {
        $user = User::findOrFail($id);
        $data = ['user' => $user];
        return view('admin.users.permissions', $data);
    }

    public function postUserPermissions(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = ['user' => $user];
        $permissions = [
            'dashboard' => $request->input('dashboard'),
            'products' => $request->input('products'),
            'product_add' => $request->input('product_add'),
            'product_edit' => $request->input('product_edit'),
            'product_delete' => $request->input('product_delete'),
            'product_gallery_add' => $request->input('product_gallery_add'),
            'product_gallery_delete' => $request->input('product_gallery_delete'),
            'categories' => $request->input('categories'),
            'category_add' => $request->input('category_add'),
            'category_edit' => $request->input('category_edit'),
            'category_delete' => $request->input('category_delete'),
            'users' => $request->input('users'),
            'user_edit' => $request->input('user_edit'),
            'user_banned' => $request->input('user_banned'),
            'user_permissions' => $request->input('user_permissions'),
            'product_search' => $request->input('product_search'),
        ];
        $permissions = json_encode($permissions);
        $user->permissions= $permissions;
        if ($user->save()) {
            return back()->with('message', 'Se han actualizado los permisos correctamente')->with('typealert', 'success');
        }
    }

    public function postUserEdit(Request $request,$id){
        $user= User::findOrFail($id);
        $user->rol = $request->input('user_type');
        if ($user->save()) {
            return back()->with('message', 'Se han actualizado los Rol del usuario correctamente')->with('typealert', 'success');
        }

    }


}
