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
    <title>Listar Medicamentos</title>
</head>
<body>
    @include('dashboard.partials.nav-header-main')
    <br><br><br>
    <div class="container">
        <a class="btn btn-success" href={{route('medicamento.create')}}>Crear</a>
        <br><br>
        <table class="table">
            <thead>
                <tbody>
                    <tr>
                        <td>
                            Id
                        </td>
                        <td>
                            Nombre
                        </td>
    
                        <td>
                            Descripcion
                        </td>

                        <td>
                            Cantidad
                        </td>

                        <td>
                            Fecha de Expiración
                        </td>

                        <td>
                            Precio Unitario
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
    
                @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>
                            {{$medicamento->id}}
                        </td>
            
                        <td>
                            {{$medicamento->nombre}}
                        </td>
            
                        <td>
                            {{$medicamento->descripcion}}
                        </td>

                        <td>
                            {{$medicamento->cantidad}}
                        </td>

                        <td>
                            {{$medicamento->fecha_expiracion}}
                        </td>

                        <td>
                            {{$medicamento->precio_unidad}}
                        </td>
            
                        <td>
                            {{$medicamento->created_at->format('d-m-Y')}}
                        </td>
            
                        <td>
                            {{$medicamento->updated_at->format('d-m-Y')}}
                        </td>
                        <td>
                            <a href="{{route('medicamento.show', $medicamento->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('medicamento.edit', $medicamento->id)}}" class="btn btn-primary">Editar</a>
                            <form method="POST" action="{{route('medicamento.destroy',$medicamento->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
            {{$medicamentos->links()}}
        </table>
    </div>
</body>
</html>