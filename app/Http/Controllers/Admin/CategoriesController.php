<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
    }

    public function getHome($module = 0)
    {
        $cats = Category::where('module', $module)->orderBy('id', 'Desc')->get();
        $data = ['cats' => $cats];
        return view('admin.categories.home', $data);
    }
    public function postCategoryAdd(Request $request)
    {
        $rules = [
            'name' => 'required',
            'icon' => 'required'
        ];
        $messages = [
            'name.required' => 'Ingrese un nombre',
            'icon.required' => 'Ingrese el HTML del icono'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $category = new Category();
            $category->name = e($request->input('name'));
            $category->module = $request->input('module');
            $category->slug = Str::slug($request->input('name'));
            $category->icon = e($request->input('icon'));
            if ($category->save()) {
                return redirect('admin/categories/0')->with('message', 'Se ha guardado la categoria')->with('typealert', 'success');
            }
        }
    }

    public function getCategoryEdit($id)
    {
        $cat = Category::findOrFail($id);
        $data = ['cat' => $cat];
        return view('admin.categories.edit', $data);
    }
    public function postCategoryEdit(Request $request,$id)
    {
        $rules = [
            'name' => 'required',
            'icon' => 'required'
        ];
        $messages = [
            'name.required' => 'Ingrese un nombre',
            'icon.required' => 'Ingrese el HTML del icono'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $category = Category::findOrFail($id);
            $category->name = e($request->input('name'));
            $category->module = $request->input('module');
            $category->slug = Str::slug($request->input('name'));
            $category->icon = e($request->input('icon'));
            if ($category->save()) {
                return back()->with('message', 'Se ha guardado la categoria')->with('typealert', 'success');
            }
        }
    }

    public function getCategoryDelete($id){
        $category = Category::findOrFail($id);
        if ($category->delete()) {
            return back()->with('message', 'Se ha borrado la categoria')->with('typealert', 'success');
        }
    }
}
