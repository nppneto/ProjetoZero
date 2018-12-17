<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
    }
    
    public function index() {

        $query = "SELECT COUNT(*) AS total_cursos FROM curso";

        $total = DB::select($query);

        return view('admin.manager', ['total' => $total]);
    }

    public function logout() {
        Auth::logout();
    }
}
