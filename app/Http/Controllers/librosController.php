<?php

namespace App\Http\Controllers;
use App\Models\Libros;
use Illuminate\Http\Request;

class librosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $libros = Libros::orderBy('id','asc')->paginate();
        return view('libros.index', compact('libros'));
    }

}
