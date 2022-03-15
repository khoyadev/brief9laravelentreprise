<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function list($id)
    {
        $region = Region::where('pays_id', $id)->get();
        return view('region.index', [
            'region' => $region
        ]);
    }
}
