<?php

namespace App\Http\Controllers;
use App\Models\Formulario;
use App\Models\Pregunta;
use Illuminate\View\View;

class FrontEndController extends Controller
{
    public function index(): View
    {
        $formularios = Formulario::where('eliminado',0)->get();
        return view('inicio', compact('formularios'));
    }

    public function show($idFormulario): View
    {

        $formulario = Formulario::find($idFormulario);

        $preguntas = Pregunta::where('idFormulario',$idFormulario)->get();

        return view('formularios.show', compact('formulario','preguntas'));
    }
}
