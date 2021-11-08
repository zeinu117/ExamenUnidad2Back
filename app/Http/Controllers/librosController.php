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
        $libros = Libros::orderBy('id','asc')->paginate(10);
        return view('libros.index', compact('libros'));
    }

    public function destroy(Libros $libros) {
        $libros->delete();
        return redirect()->route('libros.index');
    }


    public function edit(Libros $libros){
        return view('libros.show', compact('libros'));

    }
    public function update(Request $request, Libros $libros){

        $libros->titulo = $request->titulo;
        $libros->autor = $request->autor;
        $libros->editorial = $request->editorial;
        $libros->fechaPublicacion = $request->fechaPublicacion;
        $libros->numeroPaginas = $request->numeroPaginas;
        $libros->save();
        return redirect()->route('libros.index');
    }

}
