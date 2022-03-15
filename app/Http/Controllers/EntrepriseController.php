<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index(){
        return view('entreprises.index',[
            'entreprises' => Entreprise::with('quartier')->get()
        ]);
    }
    public function create(){
        $quartiers = Quartier::all();
        return view('entreprises.create',[
          'quartier' => $quartiers 
        ]);
    }
    public function store(Request $resquest){
       $resquest["dispositifFormation"] = $resquest->has('dispositifFormation');
       $resquest["contrat"] = $resquest->has('contrat');
       $resquest["organigramme"] = $resquest->has('organigramme');
       Entreprise::create($resquest->all());
       return redirect()->route('entreprises.index');
    }

    public function show(Entreprise  $entreprise){
        return view('entreprises.show',['entreprises' => $entreprise]);

    }
}
