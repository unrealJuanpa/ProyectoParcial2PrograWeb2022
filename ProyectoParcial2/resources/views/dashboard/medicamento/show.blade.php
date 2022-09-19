<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/styles.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Ver Medicamento</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <form action="{{route('medicamento.store')}}" method='post' class="form-register">
        @csrf
        <h4>Ver Medicamento</h4>
        <label for="">Nombre</label>
        <input readonly class="controls" type="text" name="nombre" value="{{$medicamento->nombre}}" id="nombre" placeholder="Nombre">
        @error("title")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Descripcion</label>
        <textarea readonly class="controls" type="text" name="descripcion" id="descripcion" placeholder="descripcion">{{$medicamento->descripcion}}</textarea>
        @error("descripcion")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <label for="">Cantidad</label>
        <input readonly class="controls" type="text" name="cantidad" value="{{$medicamento->cantidad}}" id="cantidad" placeholder="Cantidad">
        @error("cantidad")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Fecha de Expiración</label>
        <input readonly class="controls" type="datetime" name="fecha_expiracion" value="{{$medicamento->fecha_expiracion}}" id="fecha_expiracion">
        @error("fecha_expiracion")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Precio Unitario</label>
        <input readonly class="controls" type="text" name="precio_unidad" value="{{$medicamento->precio_unidad}}" id="precio_unidad" placeholder="Precio Unidad">
        @error("precio_unidad")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
    </form>
</body>
</html>