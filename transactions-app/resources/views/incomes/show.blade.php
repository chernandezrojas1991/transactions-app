<x-app-layout>
    <h1>Id: {{$income->id}}</h1>
    <p>
       <b>Monto:</b> {{$income->amount}} 
    </p>
    <a href="/incomes/{{$income->id}}/edit">
        Editar ingreso/egreso
    </a>
</x-app-layout>