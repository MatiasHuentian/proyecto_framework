<nav class="navbar sticky-top navbar-light bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
        </a>
        <ul class="nav text-right">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/login') }}">
                    <button type="button" class="btn btn-outline-primary btn-sm">Login</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">
                    <button type="button" class="btn btn-outline-success btn-sm ">Registro</button>
                </a>
            </li>
        </ul>
    </div>
</nav>