<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Bitacora extends Eloquent
{
	protected $connection = 'mongodb';
    protected $collection = 'Bitacora';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id', 'titulo','materia','autor','info','puntaje'
    ];


}
