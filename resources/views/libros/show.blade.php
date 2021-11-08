
@extends('layout.plantilla')
@section('title','Update')
@section('contenido')
<h1 class="text-center display-3">Actualizar informacion</h1>
<form action="{{route('libros.update', $libros)}}" method="post">

    @csrf
    @method('put')
    <label for="titulo">Titulo:</label>
    <input type="text" class="form-control" name="titulo" value="{{$libros->titulo}}"  />
    <br>
    <label for="autor">Autor</label>
    <input type="text"  class="form-control" name="autor" value="{{$libros->autor}}"  />
    <br>
    <label for="editorial">Editorial</label>
    <input type="text"  class="form-control" name="editorial" value="{{$libros->editorial}}" />
    <br>
    <label for="fechaPublicacion">Fecha de publicacion</label>
    <input type="date" class="form-control"  name="fechaPublicacion" value="{{$libros->fechaPublicacion}}" />
    <br>
    <label for="numeroPaginas">Numero de paginas</label>
    <input type="number" class="form-control"  name="numeroPaginas" value="{{$libros->numeroPaginas}}" />
    <br>
    <button class="btn btn-success" type="submit">Actualizar formulario</button>
</form>
@endsection


