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
        request()->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'materia' => 'required',
            'info' => 'required',

        ]);


        Bitacora::create($request->all());


        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora se creo correctamente.');
    }

    /**
     * Mostrar el recurso especificado. :-:
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(Bitacora $bitacora,$titulo)
    {

        $bitacora = Bitacora::find($titulo);
        return view('Bitacora.show',compact('bitacora','titulo'));  
    }

    /**
     * Muestra la forma para editar la bitacora :-:
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */

    public function edit($titulo)
    {
        $bitacora = Bitacora::find($titulo);
        return view('Bitacora.edit',compact('bitacora','titulo'));
    }

    /**
     * Hace un update a un recurso especifico :-:
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $titulo)
    {
        request()->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'materia' => 'required',
            'info' => 'required',
        ]);
        $bitacora= Bitacora::find($titulo);
        $bitacora->titulo = $request->get('titulo');
        $bitacora->autor = $request->get('autor');
        $bitacora->materia = $request->get('materia');
        $bitacora->info = $request->get('info');        
        $bitacora->save();

        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora se Actualizo correctamente');
    }

    /**
     * Remueve un recurso especifico :-:
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy( $titulo)
    {
        $bitacora=bitacora::find($titulo);
         $bitacora->delete();


        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora se Borro corectamente');
    }
}
