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

    public function create(Request $request)
    {
       $Bitacora = Bitacora::all();
        return view('Bitacora.create',compact('Bitacora'));
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
    public function show(Bitacora $bitacora, $titulo)
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
            'info' => 'required',
        ]);
        $bitacora= Bitacora::find($titulo);
        $bitacora->info = $request->get('info');
        $bitacora= $informacion->informacion=$request->('informacion');
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

    public function destroy(Request $request, $titulo)
    {
        $bitacora=Bitacora::find($titulo);
        $bitacora->delete();
        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora se Borro corectamente');
    }

    public function evaluar(Request $request, $titulo)
    {
        request()->validate([
          'evalua' => 'required',
      ]);
      $bitacora=Bitacora::find($titulo);
      $pts = $bitacora->puntaje;
      $ev = $request->post('evalua');
      if ($ev =="inc")
      {
        $bitacora->puntaje = $pts+1;
        $bitacora->save();
      }
      if ($ev =="dec")
      {
        $bitacora->puntaje = $pts -1;
        $bitacora->save();
      }
      return redirect()->route('Bitacora.show',compact('bitacora','titulo'));

    }
}
