<?php

namespace App\Http\Controllers;

use App\Facades\MenuRepository as Repository;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $list = Repository::all();
        return view('welcome', ['menuList' => $list]);
    }
}
