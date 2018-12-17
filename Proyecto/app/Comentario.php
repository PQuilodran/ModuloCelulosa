<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comentario extends Eloquent {
	protected $connection = 'mongodb';
    protected $collection = 'Comentario';

    protected $fillable = [
        'idBitacora','titulo','coment'
    ];
}
