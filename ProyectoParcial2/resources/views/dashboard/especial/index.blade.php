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
    <title>Listar Medicamentos Controlados</title>
    @php
        use App\Http\Controllers\Controller;
        use App\Http\Requests\StoreEspecialPost;
        use App\Models\Especial;

        $especiales=Especial::orderBy('created_at','asc') -> cursorpaginate(3);
        
    @endphp
</head>
<body>

    @include('dashboard.partials.nav-header-dashespecial')    

    <br><br><br>
    <div class="container">
        <a class="btn btn-success" href={{route('especial.create')}}>Crear</a>
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
                            Slug
                        </td>

                        <td>
                            Prescrito Para
                        </td>

                        <td>
                            Componentes
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

                @foreach ($especiales as $esp)
                <tr>
                    <td>
                        {{$esp->id}}
                    </td>
        
                    <td>
                        {{$esp->nombre}}
                    </td>
        
                    <td>
                        {{$esp->descripcion}}
                    </td>

                    <td>
                        {{$esp->slug}}
                    </td>

                    <td>
                        {{$esp->prescrito_para}}
                    </td>

                    <td>
                        {{$esp->componentes}}
                    </td>

                    <td>
                        {{$esp->cantidad}}
                    </td>

                    <td>
                        {{$esp->fecha_expiracion}}
                    </td>

                    <td>
                        {{$esp->precio_unidad}}
                    </td>
        
                    <td>
                        {{$esp->created_at->format('d-m-Y')}}
                    </td>
        
                    <td>
                        {{$esp->updated_at->format('d-m-Y')}}
                    </td>
                    <td>
                        <a href="{{route('especial.show', $esp->id)}}" class="btn btn-primary">Ver</a>
                        <a href="{{route('especial.edit', $esp->id)}}" class="btn btn-primary">Editar</a>
                        <form method="POST" action="{{route('especial.destroy',$esp->id)}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </thead>
            {{$especiales->links()}}
        </table>
    </div>
</body>
</html>