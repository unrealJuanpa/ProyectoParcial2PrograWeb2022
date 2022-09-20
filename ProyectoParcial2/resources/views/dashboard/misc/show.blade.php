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
    <title>Ver Miscelaneo</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')

    <form action="{{route('misc.store')}}" method='post' class="form-register">
    @include('dashboard.partials.sesion-flash-status')
        <h4>Ver Articulo Miscelaneo</h4>
        
        <label for="">Nombre</label>
        <input readonly class="controls" type="text" name="name" value="{{old('name',$misc->name)}}" id="name" placeholder="Nombre">
        @error("name")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Fabricante</label>
        <input readonly class="controls" type="text" name="manufacturer" value="{{old('manufacturer',$misc->manufacturer)}}" id="manufacturer" placeholder="Fabricante">
        @error("manufacturer")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
        
        <label for="">Descripción</label>
        <textarea readonly class="controls" type="text" name="description" id="description" placeholder="Descripcion">{{old('description',$misc->description)}}</textarea>
        @error("description")
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <label for="">Precio unitario</label>
        <input readonly class="controls" type="text" name="price" value="{{old('price',$misc->price)}}" id="price" placeholder="Precio unitario">
        @error("price")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror

        <label for="">Unidades disponibles</label>
        <input readonly class="controls" type="text" name="units" value="{{old('units',$misc->units)}}" id="units" placeholder="Unidades disponibles">
        @error("units")
            <small class="text-danger">
                {{$message}}
                <br>
            </small>
        @enderror
    </form>
    
    
</body>
</html>