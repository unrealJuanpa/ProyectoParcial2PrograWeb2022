<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/categories.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Categorias</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <br><br><br>
    <div class="container">
        <a class="btn btn-success" href={{route('category.create')}}>Crear</a>
        <br><br>
        <table class="table">
            <thead>
                <tbody>
                    <tr>
                        <td>
                            Id
                        </td>
                        <td>
                            Titulo
                        </td>
    
                        <td>
                            Ruta
                        </td>
    
                        <td>
                            Creacion
                        </td>
    
                        <td>
                            Actualizado
                        </td>
                        <td>
                            Acciones
                        </td>
                    </tr>
                </tbody>
    
                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{$category->id}}
                        </td>
            
                        <td>
                            {{$category->title}}
                        </td>
            
                        <td>
                            {{$category->slug}}
                        </td>
            
                        <td>
                            {{$category->created_at->format('d-m-Y')}}
                        </td>
            
                        <td>
                            {{$category->updated_at->format('d-m-Y')}}
                        </td>
                        <td>
                            <a href="{{route('category.show', $category->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Actualizar</a>
                            <form method="POST" action="{{route('category.destroy',$category->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
            {{$categories->links()}}
        </table>
    </div>
</body>
</html>