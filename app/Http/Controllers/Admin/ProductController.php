<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\PGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
    }

    public function getHome($status)
    {
        switch ($status) {
            case '0':
                $products = Product::with('getCategory')->where('status', '0')->orderBy('id', 'desc')->paginate(25);
                break;
            case '1':
                $products = Product::with('getCategory')->where('status', '1')->orderBy('id', 'desc')->paginate(25);
                break;
            case 'trash':
                $products = Product::with('getCategory')->onlyTrashed()->orderBy('id', 'desc')->paginate(25);
                break;
            case 'all':
                $products = Product::with('getCategory')->orderBy('id', 'desc')->paginate(25);
                break;
            default:
                $products = Product::with('getCategory')->orderBy('id', 'desc')->paginate(25);
                break;
        }
        $data = ['products' => $products];
        return view('admin.products.home', $data);
    }
    public function getProductAdd()
    {
        $cats = Category::where('module', '0')->pluck('name', 'id');
        $data = ['cats' => $cats];
        return view('admin.products.add', $data);
    }
    public function postProductAdd(Request $request)
    {
        $rules = [
            'name' => 'required',
            //'img' => 'required|image',
            'price' => 'required',
            'content' => 'required'

        ];
        $messages = [
            'name.required' => 'Ingrese un nombre de producto.',
            'img.required' => 'Ingrese una imagen.',
            'img.image' => 'Ingrese una imagen.',
            'price.required' => 'Ingresa un costo al producto',
            'content.required' => 'Ingresa una descripcion'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $path = '/' . date('Y-m-d');
            $img = $request->file('img');
            $fileExt = trim($img->getClientOriginalExtension());
            $upload_path = Config::get('filesystems.disks.uploads.root');
            $name = Str::slug(str_replace($fileExt, '', $img->getClientOriginalName()));
            $fileName = rand(1, 999) . '-' . $name . '.' . $fileExt;
            $file_file = $upload_path . '/' . $path . '/' . $fileName;
            $product = new Product();
            $product->status = '0';
            $product->name = e($request->input('name'));
            $product->slug = Str::slug($request->input('name'));
            $product->category_id = $request->input('category');
            $product->file_path = date('Y-m-d');
            $product->image = $fileName;
            $product->price = $request->input('price');
            $product->quantity = $request->input('quantity');
            $product->sku = e($request->input('sku'));
            $product->indiscount = $request->input('indiscount');
            $product->discount = $request->input('discount');
            $product->content = e($request->input('content'));
            if ($product->save()) {
                if ($request->hasFile('img')) {
                    $fl = $request->img->storeAs($path, $fileName, 'uploads');
                    $image = Image::make($file_file);
                    $image->fit(256, 256, function ($constraint) {
                        $constraint->upsize();
                    });
                    $image->save($upload_path . '/' . $path . '/t_' . $fileName);
                }
                return redirect('/admin/products')->with('message', 'Se ha registrado el producto correctamente')->with('typealert', 'success');
            }
        }
    }

    public function getProductEdit($id)
    {
        $cats = Category::where('module', '0')->pluck('name', 'id');
        $p = Product::findOrFail($id);
        $data = ['cats' => $cats, 'p' => $p];
        return view('admin.products.edit', $data);
    }

    public function postProductEdit(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required',
            'content' => 'required'

        ];
        $messages = [
            'name.required' => 'Ingrese un nombre de producto.',
            'price.required' => 'Ingresa un costo al producto',
            'content.required' => 'Ingresa una descripcion'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $product = Product::findOrFail($id);
            $ipp = $product->file_path;
            $ip = $product->image;
            $product->status = $request->input('status');
            $product->name = e($request->input('name'));
            $product->category_id = $request->input('category');
            if ($request->hasFile('img')) {
                $path = '/' . date('Y-m-d');
                $img = $request->file('img');
                $fileExt = trim($img->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
                $name = Str::slug(str_replace($fileExt, '', $img->getClientOriginalName()));
                $fileName = rand(1, 999) . '-' . $name . '.' . $fileExt;
                $file_file = $upload_path . '/' . $path . '/' . $fileName;
                $product->file_path = date('Y-m-d');
                $product->image = $fileName;
            }
            $product->price = $request->input('price');
            $product->indiscount = $request->input('indiscount');
            $product->discount = $request->input('discount');
            $product->content = e($request->input('content'));
            if ($product->save()) {
                if ($request->hasFile('img')) {
                    $fl = $request->img->storeAs($path, $fileName, 'uploads');
                    $image = Image::make($file_file);
                    $image->fit(256, 256, function ($constraint) {
                        $constraint->upsize();
                    });
                    $image->save($upload_path . '/' . $path . '/t_' . $fileName);
                    unlink($upload_path . '/' . $ipp . '/' . $ip);
                    unlink($upload_path . '/' . $ipp . '/t_' . $ip);
                }
                return back()->with('message', 'Se ha actualizado el producto correctamente')->with('typealert', 'success');
            }
        }
    }

    public  function postProductGalleryAdd(Request $request, $id)
    {
        $rules = [
            'file_image' => 'required|image',
        ];
        $messages = [
            'file_image.required' => 'Seleccione una imagen.',
            'file_image.image' => 'Seleccione un archivo de imagen.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            if ($request->hasFile('file_image')) {
                $path = '/' . date('Y-m-d');
                $img = $request->file('file_image');
                $fileExt = trim($img->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
                $name = Str::slug(str_replace($fileExt, '', $img->getClientOriginalName()));
                $fileName = rand(1, 999) . '-' . $name . '.' . $fileExt;
                $file_file = $upload_path . '/' . $path . '/' . $fileName;

                $pGallery = new PGallery();
                $pGallery->file_path = $path;
                $pGallery->file_name = $fileName;
                $pGallery->product_id = $id;
                if ($pGallery->save()) {
                    if ($request->hasFile('file_image')) {
                        $fl = $request->file_image->storeAs($path, $fileName, 'uploads');
                        $image = Image::make($file_file);
                        $image->fit(256, 256, function ($constraint) {
                            $constraint->upsize();
                        });
                        $image->save($upload_path . '/' . $path . '/t_' . $fileName);
                    }
                    return back()->with('message', 'Imagen cargada con exito')->with('typealert', 'success');
                }
            }
        }
    }
    public function getProductGalleryDelete($id, $gid)
    {
        $pG = PGallery::findOrFail($gid);
        if ($pG->product_id != $id) {
            return back()->with('message', 'La imagen no se puede eliminar')->with('typealert', 'danger');
        } else {
            if ($pG->delete()) {
                return back()->with('message', 'La imagen se ha eliminado')->with('typealert', 'success');
            }
        }
    }
    public function getProductDelete($id)
    {
        $product = Product::findOrFail($id);
        if ($product->delete()) {
            return back()->with('message', 'Se ha enviado a la papelera el producto')->with('typealert', 'success');
        }
    }
    public function getProductRestore($id)
    {
        $product = Product::onlyTrashed()->where('id',$id)->first();
        if ($product->restore()) {
            return redirect('/admin/product/'.$id.'/edit')->with('message', 'Se ha restaurado el producto')->with('typealert', 'success');
        }
    }

    public function postProductSearch(Request $request)
    {
        $rules = [
            'search' => 'required',
        ];
        $messages = [
            'search.required' => 'El campo de Busqueda es necesario rellenarlo',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            switch ($request->input('filter')) {
                case '0':
                    $products = Product::with('getCategory')->where('name', 'LIKE', '%' . $request->input('search') . '%')->where('status', $request->input('status'))->orderBy('id', 'desc')->paginate(25);
                    break;

                case '1':
                    $products = Product::with('getCategory')->where('sku', $request->input('search'))->orderBy('id', 'desc')->paginate(25);
                    break;
            }
            $data = ['products' => $products];
            return view('admin.products.home', $data);
        }
    }

}
