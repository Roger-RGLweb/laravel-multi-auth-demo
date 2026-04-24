<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Sistema Demo</span>

        <div class="d-flex text-white">
            <span class="me-3">
              {{ auth()->user()->name }} ({{ auth()->user()->role }})
            </span>

            <form method="POST" action="/logout">
                @csrf
                <button class="btn btn-sm btn-outline-light">Sair</button>
            </form>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>