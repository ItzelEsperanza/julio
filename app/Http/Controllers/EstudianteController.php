<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes=Estudiante::all();
        return view('estudiantes.indexEstudiantes',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('estudiantes.createEstudiantes');
    }

     public function equis()
    {
        //
         return view('estudiantes.equisEstudiantes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $request->validate([
           'nombre'=>'required',
           'codigo'=>'required',
           'carrera'=>'required',
           'creditos_cursados'=>'required',
           'correo'=>'required',
           ]);

          $estudiantes= new Estudiante();
          $estudiantes->nombre=$request->input('nombre');
          $estudiantes->codigo=$request->input('codigo');
          $estudiantes->carrera=$request->input('carrera');
          $estudiantes->creditos_cursados=$request->input('creditos_cursados');
          $estudiantes->correo=$request->input('correo');

          $estudiantes->save();

         return redirect()->route('estudiantes.show',$estudiantes->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
