
@extends('layout.plantilla')
@section('title','Lista')
@section('contenido')
<h1 class="text-center display-3">Bienvenidos a la seccion de libros</h1>

        <li class="list-group-item">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">titulo</th>
                        <th scope="col">autor</th>
                        <th scope="col">editorial</th>
                        <th scope="col">fecha de publicacion</th>
                        <th scope="col">numero de paginas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($libros as $libro)
                    <tr>
                        <th scope="row">{{$libro->id}}</th>
                        <th>{{$libro->titulo}}</th>
                        <th>{{$libro->autor}}</th>
                        <th>{{$libro->editorial}}</th>
                        <th>{{$libro->fechaPublicacion}}</th>
                        <th>{{$libro->numeroPaginas}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </li>



    {{$libros->links()}}
@endsection
