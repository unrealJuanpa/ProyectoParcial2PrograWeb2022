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
    <title>Login</title>
</head>
<body> 
    @include('dashboard.partials.nav-header-main')
    <form action="{{route('login.store')}}" method='post' class="form-register">
        

    {{--  @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif --}}
        @csrf
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{session('status')}}
            </div>
        @endif


        <h4>Log-in</h4>
        
        <label for="">Username</label>
        <input class="controls" type="text" name="username" value="{{old('username')}}" id="username" placeholder="Nombre de usuario">

        <label for="">Password</label>
        <input class="controls" type="text" name="password" value="{{old('password')}}" id="manufacturer" placeholder="Fabricante">

        <button type='submit' class="botons">Validar</button>


    </form>
</body>
</html>