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

    public function store(){
        
    }
}
