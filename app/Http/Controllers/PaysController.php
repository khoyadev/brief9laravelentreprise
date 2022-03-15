<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index(){
        $pays = Pays::all();
        return view('pays.index',[
            'pays' => $pays
        ]);
    }
}
