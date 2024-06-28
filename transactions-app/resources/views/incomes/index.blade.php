<!DOCTYPE html>
<html>
<head>
    <title>Ingresos</title>
</head>
<body>
    <h1>Lista de Ingresos/Egresos</h1>
    <a href="incomes/create">
        Agregar nuevo ingreso/egreso
    </a>
    <br>
    <br>
    <ul>
        @php $totalAmount = 0; @endphp
        @foreach ($incomes as $income)
            <li>
                <a href="/incomes/{{$income->id}}">
                    {{$income->id}}. ${{ $income->amount }}
                </a>
                @php $totalAmount += $income->amount; @endphp
            </li>
        @endforeach
    </ul>
    <p>Total Ganancias: ${{ $totalAmount }}</p>
</body>
</html>