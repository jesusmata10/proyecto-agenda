<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        </meta>
        <title>
            Laravel
        </title>
        <script src="{{ asset('js/jquery-slim.min.js') }}">
        </script>
        <script src="{{ asset('js/popper.min.js') }}">
        </script>
        <script src="{{ asset('js/bootstrap.min.js') }}">
        </script>
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </link>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <button aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarToggler" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <a class="navbar-brand" href="#">
                Navbar
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Home
                            <span class="sr-only">
                                (current)
                            </span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Configuracion
                            <span class="sr-only">
                                (current)
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Link
                        </a>
                    </li>
                    <li class="nav-item">
                        <a aria-disabled="true" class="nav-link disabled" href="#" tabindex="-1">
                            Disabled
                        </a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input aria-label="Search" class="form-control mr-sm-2" placeholder="Search" type="search">
                        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </input>
                </form>
            </div>
        </nav>
        <h1>
            Hello, world!
        </h1>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
</html>
