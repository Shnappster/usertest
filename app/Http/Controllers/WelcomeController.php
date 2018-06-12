<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->user()->hasRole('admin')) {
            return redirect('/panel');
        }
        $request->user()->authorizeRoles('customer');
        return view('main.master');
    }

    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('admin.panel');
    }
}
