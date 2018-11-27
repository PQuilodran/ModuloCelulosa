<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Usuario extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'Usuario';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        '_id', 'puntuacion_plataforma'
    ];
}