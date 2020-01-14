<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    protected $fillable = ['latitud', 'longitud', 'nombre'];

    public function cita(){
        return $this->hasMany('App\Cita');
    }

}
