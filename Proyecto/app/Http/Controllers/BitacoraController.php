<?php

namespace App\Http\Controllers;

use App\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Muestra todas las Bitacoras
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bitacora = Bitacora::all();
        return view('Bitacora.index',compact('Bitacora'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Muestra el formulario para crear la nueva bitacora
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bitacora.create');
    }

    /**
     * Almacena la bitacora en la bd
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        request()->validate([
            '_id' => 'required',
            'puntos_actividad' => 'required',
        ]);


=======
        ([
        '_id' => 'required',
        'titulo' => 'required',
        'materia' => 'required',
        'autor' => 'required',
        'info' => 'required',
    ]);
>>>>>>> alfa
        Bitacora::create($request->all());


        return redirect()->route('Bitacora.index')
<<<<<<< HEAD
                        ->with('success','Bitacora created successfully.');
=======
                        ->with('success','Bitacora crada con exito.');
>>>>>>> alfa
    }

    /**
     * Mostrar el recurso especificado. :-:
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(Bitacora $bitacora)
    {
        return view('Bitacora.show',compact('bitacora'));
    }

    /**
     * Muestra la forma para editar la bitacora :-:
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit(Bitacora $bitacora)
    {
        return view('Bitacora.edit',compact('bitacora'));
    }

    /**
     * Hace un update a un recurso especifico :-:
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bitacora $bitacora)
    {
        request()->validate([
            '_id' => 'required',
            'puntos_actividad' => 'required',
        ]);


        $bitacora->update($request->all());


        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora updated successfully');
    }

    /**
     * Remueve un recurso especifico :-:
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy( $_id)
    {
        $bitacora=Bitacora::find($_id);
         $bitacora->delete();


        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora deleted successfully');
=======
    public function destroy($id){

        $bitacora = Bitacora::find($id);
        dump($bitacora/$id);
        $bitacora->delete();
        return redirect('Bitacora.index')->with('success','Car has been  deleted');
>>>>>>> alfa
    }
}
