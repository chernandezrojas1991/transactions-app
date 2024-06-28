<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;

class IncomeController extends Controller
{
    #get all incomes from db
    public function index(){
        $incomes = Income::all();
        #return $incomes; -> retorna como json en el html

        #Para pasarlo a la vista
        #compact recibe el nombre de la variable que denotamos por $, un poco más arriba
        #determinar la vista que quiero mostrar view(folder,file)
        return view('incomes.index', compact('incomes'));
    }

    #mostrar vista para crear ingreso/egreso
    public function create(){
        return view('incomes.create');
    }

    #Al pasar Request request como parámetro, hacemos inyección
    public function store(Request $request){
        #obtener valores ingresados y setearlos en un objeto de tipo Income
        $income = new Income();
        $income->amount = $request->amount;

        #guardar cambios
        $income->save();

        #redirigir a vista de /incomes (donde imprimo lista de ingresos)
        return redirect('/incomes');
    }

    #en $income viene el id del ingreso/egreso
    public function show($id){
        $income = Income::find($id);
        return view('incomes.show', compact('income'));
    }

    public function edit($income){
        $income = Income::find($income);
        return view('incomes.edit', compact('income'));
    }

    #recupera los campos del formulario en request y la info de la url con $income
    public function update(Request $request, $income){
        #encontrar el objeto que deseo actualizar
        $income = Income::find($income);
        $income->amount = $request->amount;

        #update en db
        $income->save();
        return redirect("/incomes/{$income->id}");
    }
}
