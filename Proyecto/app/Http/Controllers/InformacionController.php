<?php
namespace App\Http\Controllers;
use App\informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller {
    /**
     * @return \Illuminate\Http\Response
     */	
//
    public function index($idI) {
		$informacion = informacion::all()->where('id', $idI);
        return view('informacion.index',compact('informacion'))
            ->with('i', (request()->input('page', 1) - 1) * 5);			
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('informacion.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        request()->validate([
            'id' => 'required',
			'titulo' => 'required',
            'informacion' => 'required',
            'fecha'  => 'required'
        ]);
        informacion::create($request->all());
        return redirect()->route('Bitacora.edit')
                        ->with('success','informacion se creo correctamente.');
    }

    /**     
     * @param  \App\Bitacora  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(informacion $informacion,$id) {
        $informacion = informacion::find($id);
        return view('informacion.show',compact('informacion','id'));  
    }	
}
