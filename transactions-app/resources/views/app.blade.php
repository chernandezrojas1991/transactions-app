<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Incomes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Outcomes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Your Profits</a>
        </li>
        </ul>
    </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="col-md-6 d-flex flex-column align-items-center mb-3">
                <h2 class="h2-title">Total Ingresos</h2>
                <h2 class="h2-sum" id="h2-sum-total-incomes">0</h2>
                <input type="number" class="form-control mb-2" placeholder="Ingresar cifra">
                <button type="button" class="btn btn-primary">Registrar</button>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-center">
                <h2 class="h2-title">Total Egresos</h2>
                <h2 class="h2-sum" id="h2-sum-total-outcomes">0</h2>
                <input type="number" class="form-control mb-2" id="income-input" placeholder="Ingresar cifra">
                <button type="button" class="btn btn-primary" onclick="registerIncome()">Registrar</button>
            </div>
        </div>
    </div>

    <script>
    </script>
</body>
</html>
