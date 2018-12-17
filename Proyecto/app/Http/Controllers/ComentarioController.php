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
		//$idB = '5c1156bdf8bdaa3008001692';
		//$idB = '5c11894bf8bdaa3008001693';
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
            'coment' => 'required'
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


    /**
     * Muestra la forma para editar el comentario :-:
     *
     * @param  \App\Bitacora  $comentario
     * @return \Illuminate\Http\Response
     */

    public function edit($idBitacora) {
        $comentario = Comentario::find($idBitacora);
        return view('Comentario.edit',compact('comentario','idBitacora'));
    }

    /**
     * Hace un update a un recurso especifico :-:
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bitacora  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idBitacora) {
        request()->validate([
            'idBitacora' => 'required',
            'autor' => 'required',
            'texto' => 'required',
        ]);
        $comentario= Comentario::find($idBitacora);
        $comentario->idBitacora = $request->get('idBitacora');
        $comentario->autor = $request->get('autor');
        $comentario->texto = $request->get('texto');
        $comentario->save();

        return redirect()->route('Comentario.index')
                        ->with('success','Comentario se Actualizo correctamente');
    }

    /**
     * Remueve un recurso especifico :-:
     *
     * @param  \App\Bitacora  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy( $idBitacora) {
        $comenario=Comentario::find($idBitacora);
         $comentario->delete();
        return redirect()->route('Comentario.index')
                        ->with('success','Comentario se Borro corectamente');
    }
}
