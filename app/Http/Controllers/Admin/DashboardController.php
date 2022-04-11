<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ventas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __Construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
        $this->middleware('user.status');
        $this->middleware('user.permissions');
    }

    public function getDashboard(){
        $ventas = ventas::all();
        return view('admin.dashboard', compact('ventas'));
    }
}
