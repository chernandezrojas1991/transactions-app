<x-app-layout>
    <h1>Id: {{$income->id}}</h1>
    <p>
       <b>Monto:</b> {{$income->amount}} 
    </p>
    <a href="/incomes/{{$income->id}}/edit">
        Actualizar ingreso/egreso
    </a>
    <br>
    <form action="/incomes/{{$income->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">
            Eliminar ingreso/egreso
        </button>
    </form>
</x-app-layout>