<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/clientes">Clientes <span class="sr-only"></span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/facturas">Facturas <span class="sr-only"></span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/proveedores">Proveedores <span class="sr-only"></span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/remitos">Remitos <span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
