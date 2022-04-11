<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Mail\UserSendRecover;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserSendNewPassword;
use Illuminate\Support\Str;

class ConnectController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['getLogout']);
    }
    public function getLogin()
    {
        return view('connect.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $messages = [
            'email.required' => 'Su correo es requirdo',
            'email.email' => 'El formato del correo que ingreso no valido',
            'password.required' => 'Se requiere una contraseña',
            'password.min' => 'La contraseña debe tener almenos 8 caracteres'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
        } else {
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                if (Auth::user()->status == '100') {
                    return redirect('/logout');
                } else {
                    if (Auth::user()->rol == "1") {
                        return redirect('/admin');
                    } else {
                        return redirect('/home');
                    }
                }
            } else {
                return back()->with('message', 'Correo Electronico o contraseña erronea')->with('typealert', 'danger');
            }
        }
    }

    public function getRegister()
    {
        return view('connect.register');
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password'
        ];

        $messages = [
            'name.required' => 'Su Nombre es requerido',
            'lastname.required' => 'Su Apellido es requerido',
            'email.required' => 'Su Correo es requirdo',
            'email.email' => 'El formato del correo que ingreso no valido',
            'email.unique' => 'Ya existe un usuario con el correo ingresado',
            'password.required' => 'Se requiere una contraseña',
            'password.min' => 'La contraseña debe tener almenos 8 caracteres',
            'cpassword.required' => 'Es necnesario confirmar la contraseña',
            'cpassword.min' => 'La contraseña debe tener almenos 8 caracteres',
            'cpassword.same' => 'Las contraseñas no coinciden'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $user = new User();
            $user->name = e($request->input('name'));
            $user->lastname = e($request->input('lastname'));
            $user->email = e($request->input('email'));
            $user->password = e(Hash::make($request->input('password')));
            if ($user->save()) {
                return redirect('/login')->with('message', 'Se ha creado su usuario, Ahora pude iniciar sesion')->with('typealert', 'success');
            }
        }
    }
    public function getLogout()
    {
        $status = Auth::user()->status;
        Auth::logout();
        if ($status == '100') {
            return redirect('/login')->with('message', 'Su cuenta ha sido suspendida')->with('typealert', 'danger');
        } else {
            return redirect('/');
        }
    }
    public function getRecover()
    {
        return view('connect.recover');
    }

    public function postRecover(Request $request)
    {
        $rules = [
            'email' => 'required|email'
        ];

        $messages = [
            'email.required' => 'Su Correo es requirdo',
            'email.email' => 'El formato del correo que ingreso no valido'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $user = User::where('email', $request->input('email'))->count();
            if ($user == '1') {
                $user = User::where('email', $request->input('email'))->first();
                $code = rand(100000, 999999);
                $data = ['name' => $user->name, 'email' => $user->email, 'code' => $code];
                $u = User::find($user->id);
                $u->password_code = $code;
                if ($u->save()) {
                    Mail::to($user->email)->send(new UserSendRecover($data));
                    return redirect('/reset?email=' . $user->email)->with('message', 'Se ha enviado un correo con un codigo de seguridad')->with('typealert', 'success');
                }
            } else {
                return back()->with('message', 'El correo electronico no existe')->with('typealert', 'danger')->withInput();
            }
        }
    }

    public function getReset(Request $request)
    {
        $data = ['email' => $request->get('email')];
        return view('connect.reset', $data);
    }

    public function postReset(Request $request)
    {

        $rules = [
            'email' => 'required|email',
            'code' => 'required'
        ];

        $messages = [
            'email.required' => 'Su Correo es requirdo',
            'email.email' => 'El formato del correo que ingreso no valido',
            'code.required' => 'Ingrese el codigo de seguridad que se encuentra en su correo'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger')->withInput();
        } else {
            $user = User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->count();
            if ($user == '1') {
                $user = User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->first();
                $new_password = Str::random(8);
                $user->password = Hash::make($new_password);
                $user->password_code = null;
                $data = ['name' => $user->name, 'password' => $new_password];
                if ($user->save()) {
                    Mail::to($user->email)->send(new UserSendNewPassword($data));
                    return redirect('/login')->with('message', 'Se ha enviado un correo con la nueva contraseña, ahora puedes iniciar sesion')->with('typealert', 'success');
                }
            } else {
                return back()->with('message', 'El correo electronico o el codigo de seguridad es incorrecto')->with('typealert', 'danger')->withInput();
            }
        }
    }
}
