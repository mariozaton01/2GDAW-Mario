@extends("layout")
@section("content")
    <h1>Inicio</h1>
    @if(isset($error))
        <h2>{{$error}}</h2>
        <a href="{{route("inicio")}}">Volver atras</a>
    @else
        <form method="post" action="{{route("anadirProyecto")}}">
            @csrf
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
            @error("titulo")
            <br>
            <p style="color: red">{{$message}}</p>
            @enderror
            <br>
            <label for="descrip">Descripcion: </label>
            <input type="text" id="descrip" name="descrip">
            <br>
            <label for="url">URL: </label>
            <input type="text" id="url" name="url"><br><br>

            <button>Añadir proyecto</button>
        </form>
        <br><br>
        <a href="borrarTodo">Borrar todos los proyectos</a>
        <br>
        <br>
        <br>

        @if(!isset($listaProyectos))
            <h2>No hay proyectos guardados.</h2>
        @else
            <table border="1">
                <thead>
                <td>Id</td>
                <td>Titulo</td>
                <td>Descripcion</td>
                <td>URL</td>
                </thead>
                <tbody>
                @foreach($listaProyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->id}}</td>
                        <td>{{$proyecto->titulo}}</td>
                        <td>{{$proyecto->descripcion}}</td>
                        <td><a href="detalles/{{$proyecto->id}}">{{$proyecto->url}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif


    @endif


@endsection
