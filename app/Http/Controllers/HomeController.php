<?php

namespace App\Http\Controllers;

use App\Models\Registry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registries = Registry::orderBy('id', 'desc')
            ->paginate(5);

        return view('paginas.home', ['registries' => $registries]);
    }
}
