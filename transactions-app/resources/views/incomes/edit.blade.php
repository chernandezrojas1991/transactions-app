<x-app-layout>
    <h1>Formulario para editar un ingreso/egreso</h1>
    <form action="/incomes/{{$income->id}}" method="POST">
        <!-- agregar token para evitar que extraños agreguen formularios -->
        @csrf
        @method('PUT') <!-- método oculto, dado que en el formulario sólo permite POST -->
        <label>
            Monto:
            <input type="number" name="amount" value="{{$income->amount}}">
        </label>
        <br>
        <button class="btn btn-primary" type="submit">
            Editar ingreso/egreso
        </button>
    </form>
    
</x-app-layout>