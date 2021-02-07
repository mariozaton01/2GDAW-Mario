@extends("layout")
@section("content")
    @if(isset($error)){
    <h1>{{$error}}</h1>
    <a href="../{{$id}}">Volver atras</a>
    @else
        <h1>Detalles del proyecto</h1>

        <form method="get" action="actualizarProyecto/{{$datos[0]->id}}">
            @csrf
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo" value="{{$datos[0]->titulo}}">
            <br>
            <label for="descrip">Descripcion: </label>
            <input type="text" id="descrip" name="descrip" value="{{$datos[0]->descripcion}}">
            <br>
            <label for="url">URL: </label>
            <input type="text" id="url" name="url" value="{{$datos[0]->url}}"><br><br>

            <button>Actualizar proyecto</button>
        </form>

        <a href="borrarProyecto/{{$datos[0]->id}}">Eliminar proyecto</a>

        <br>
        <br>
        @if(isset($listaEstudiantes))
            <table border="1">
                <thead>
                <td>Id</td>
                <td>Nombre</td>
                <td>Borrar del proyecto</td>
                </thead>
                <tbody>
                @foreach($listaEstudiantes as $estudiante)
                    <tr>
                        <td>{{$estudiante->id}}</td>
                        <td>{{$estudiante->nombre." ". $estudiante->apellido}}</td>
                        <td><a href="detalles/{{$estudiante->id}}">Borrar</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <h2>No hay estudiantes pertenecientes a este proyecto.</h2>

        @endif
    @endif


@endsection
