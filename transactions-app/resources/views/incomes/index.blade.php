<!DOCTYPE html>
<html>
<head>
    <title>Ingresos</title>
</head>
<body>
    <h1>Lista de Ingresos</h1>
    <ul>
        @php $totalAmount = 0; @endphp
        @foreach ($incomes as $income)
            <li>${{ $income->amount }}</li>
            @php $totalAmount += $income->amount; @endphp
        @endforeach
    </ul>
    <p>Total Ingresos: ${{ $totalAmount }}</p>
</body>
</html>