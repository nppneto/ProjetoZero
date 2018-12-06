<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Home extends Controller
{
    
    public function index() {

        $cursos = DB::select('select * from curso where ativo = 1');

        return view('home', ['cursos' => $cursos]);
    }
}
