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
    <!-- cada vez que se ejecute, será recibido por Route::post(/incomes).
        Si no se especifica, por defecto va a get
    --> 
    <form action="/incomes" method="POST">
        <!-- agregar token para evitar que extraños agreguen formularios -->
        @csrf
        <label>
            Ingresar monto:
            <input type="number" name="amount" id="inputAmount" required>
        </label>
        <br>
        <button class="btn btn-primary" type="submit">
            Agregar ingreso
        </button>
    </form>
    <script>
    </script>
</body>
</html>
