<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
   public  function index(){
    $curso= Curso::all();
    return response()->json([
        'data'=>$curso


    ]);

   }
}
