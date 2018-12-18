<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class informacion extends Eloquent {
	protected $connection = 'mongodb';
    protected $collection = 'informacion';

    protected $fillable = [
        'id','titulo','informacion','fecha'
    ];
}
