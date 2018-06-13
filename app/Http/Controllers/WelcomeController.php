<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->user()->hasRole('admin')) {
            return view('admin.panel');
        } else {
            $request->user()->hasRole('customer');
            return view('main.master');
        }
    }
}
