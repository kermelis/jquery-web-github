<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;

class formationController extends Controller
{
    public function searchFormation(Request $request){
      $formations = formation::where('console',$request->plateforme)->get();
      return $formations;
    }
}
