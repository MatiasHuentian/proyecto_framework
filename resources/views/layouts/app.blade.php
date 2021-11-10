<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar sticky-top navbar-light bg-dark text-right">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            </a>
            <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            <button type="button" class="btn btn-outline-primary btn-sm">Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <button type="button" class="btn btn-outline-success btn-sm ">Registro</button>
                        </a>
                    </li>
            </ul>
        </div>
    </nav>
    <figure class="text-center">
        <h1 class="display-3">@yield('titulo')</h1> <br>
    </figure>

    
    @yield('content')
</body>
</html>