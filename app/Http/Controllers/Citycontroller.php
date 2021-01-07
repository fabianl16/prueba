<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DB;

class Citycontroller extends Controller
{
    //
    public function show()
    {
       
       //$cities = App\Citie::query();
       $res = DB::table('cities')
            ->join('municipies', 'municipies.id', '=', 'cities.id_municipality')
            ->select('Nombre', 'Nombre_ciudades')
            ->get();
   
           	return view('welcome', ['res' => $res]);
    }
}
