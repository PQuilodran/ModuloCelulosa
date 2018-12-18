<?php
namespace App\Http\Controllers;
use App\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller {
    /**
     * Muestra todas los Comentarios
     *
     * @return \Illuminate\Http\Response
     */	
//
    public function index($idB) {
		$comentario = Comentario::all()->where('idBitacora', $idB);
        return view('Comentario.index',compact('comentario'))
            ->with('i', (request()->input('page', 1) - 1) * 5);			
    }

    /**
     * Muestra el formulario para crear un nuevo comentario
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Comentario.create');
    }

    /**
     * Almacena el comentario en la bd
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        request()->validate([
            'idBitacora' => 'required',
			'titulo' => 'required',
            'coment' => 'required',
            'fecha'  => 'required'
        ]);
        Comentario::create($request->all());
        return redirect()->route('Bitacora.index')
                        ->with('success','Comentario se creo correctamente.');
    }

    /**
     * Mostrar el recurso especificado. :-:
     *
     * @param  \App\Bitacora  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario,$idBitacora) {
        $comentario = Comentario::find($idBitacora);
        return view('Comentario.show',compact('comentario','idBitacora'));  
    }	
}
