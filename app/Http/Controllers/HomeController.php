<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $categories = Categories::all();
        return view('Userdashboard', compact('users', 'categories'));
    }

    public function admin()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }
}
