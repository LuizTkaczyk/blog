<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //uso do invoke para usar uma única rota
    {
        return view('welcome');
    }

}
