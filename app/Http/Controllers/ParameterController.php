<?php

namespace App\Http\Controllers;

use App\Models\EconomicRating;
use App\Models\Parameters;
use App\Models\Source;
use App\Models\TypeOfExpense;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParameterController extends Controller
{
    public function __construct(TypeOfExpense $typeOfExpense ,EconomicRating $economicRating, Source $source ){

        $this->typeOfExpense = $typeOfExpense;
        $this->economicRating = $economicRating;
        $this->source = $source;
    }


    public function index(Request $request)
    {
        $despesas = $this->typeOfExpense->orderBy('title', 'ASC')->get();
        $classificacoes = $this->economicRating->where('id', '=',0)
                                               ->orderBy('title', 'ASC')->get();
        $fontes = $this->source->where('id', '=',0)
                ->orderBy('title', 'ASC')->get();
        $parameters = Parameters::all();
        $upgs = DB::select('SELECT id, upg,description FROM upgs');
        $economics = DB::select('SELECT id, title FROM economic_ratings');
        $sources = DB::select('SELECT id, title FROM sources');
        $expenses = DB::select('SELECT id, title,description FROM type_of_expenses');





        return view('parameters.index', ['despesas' =>$despesas, 'classificacoes' =>$classificacoes, 'fontes'=>$fontes])->with('parameters', $parameters)->with('units',Unit::all())->with('upgs',$upgs)->with('economics',$economics)->with('sources',$sources)->with('expenses',$expenses);
    }


    public function loadDespesas(Request $request)
    {
        $dataForm = $request->all();
        $type_of_expenses_id= $dataForm['type_of_expenses_id'];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parameters = "";
        $upgs = DB::select('SELECT id, upg,description FROM upgs');
        $economics = DB::select('SELECT id, title FROM economic_ratings');
        $sources = DB::select('SELECT id, title FROM sources');
        $expenses = DB::select('SELECT id, title,description FROM type_of_expenses');


        return view('parameters.create')->with('parameters', $parameters)->with('units',Unit::all())->with('upgs',$upgs)->with('economics',$economics)->with('sources',$sources)->with('expenses',$expenses);

    }
    public function createManagement()
    {
        $units = DB::select('SELECT id, name FROM units');
        $upgs = DB::select('SELECT id, upg,description FROM upgs');
        //dd($units);

       // $units= Parameters::all();

        return view('parameters.createManagement')->with('units',$units)->with('upgs',$upgs);
    }

    public function createBudget()
    {
        $economics = DB::select('SELECT id, title FROM economic_ratings');
        $sources = DB::select('SELECT id, title FROM sources');
        $expenses = DB::select('SELECT id, title,description FROM type_of_expenses');
        //dd($units);


        return view('parameters.createBudget')->with('economics',$economics)->with('sources',$sources)->with('expenses',$expenses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'units_id' => 'required',
            'economic_ratings_id' => 'required',
            'sources_id' => 'required',
            'type_of_expenses_id' => 'required',
            'upgs_id' => 'required',
            'budget_ceilling' => 'required',
            'type' => 'required',
            'type_parameters' => 'required',
        ]);

        $parameters = new Parameters();

        $parameters->year = $request->year;
        $parameters->units_id = $request->units_id;
        $parameters->economic_ratings_id = $request->economic_ratings_id;
        $parameters->sources_id = $request->sources_id;
        $parameters->type_of_expenses_id = $request->type_of_expenses_id;
        $parameters->upgs_id = $request->upgs_id;
        $parameters->budget_ceilling = $request->budget_ceilling;
        $parameters->type = $request->type;
        $parameters->type_parameters = $request->type_parameters;


        $parameters->save();



        return redirect()->route('parameters.index')->with('success','Parametro cadastrato com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function show(Parameter $parameter)
    {
        return view('parameters.show',compact('parameter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function edit(Parameter $parameter)
    {
        return view('parameters.edit',compact('parameter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parameter $parameter)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $parameter->fill($request->post())->save();

        return redirect()->route('parameters.index')->with('success','Parameter Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parameter $parameter)
    {
        $parameter->delete();
        return redirect()->route('parameters.index')->with('success','Parameter has been deleted successfully');
    }
}
