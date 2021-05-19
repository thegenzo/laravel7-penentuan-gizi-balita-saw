<?php

namespace App\Http\Controllers;
use App\Orangtua;
use App\Balita;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $orangtua = Orangtua::count();
        $balita = Balita::count();
        $admin = User::where('level', 'admin')->count();
        return view('pages.home', compact('orangtua', 'balita', 'admin'));
    }
}
