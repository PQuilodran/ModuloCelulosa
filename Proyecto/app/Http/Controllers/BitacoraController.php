<?php

namespace App\Http\Controllers;

use App\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bitacora.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            '_id' => 'required',
            'puntos_actividad' => 'required',
        ]);


        Bitacora::create($request->all());


        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function show(Bitacora $bitacora)
    {
        return view('Bitacora.show',compact('bitacora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function edit(Bitacora $bitacora)
    {
        return view('Bitacora.edit',compact('bitacora'));
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Bitacora  $bitacora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bitacora $bitacora)
    {
         $bitacora->delete();


        return redirect()->route('Bitacora.index')
                        ->with('success','Bitacora deleted successfully');
    }
}
