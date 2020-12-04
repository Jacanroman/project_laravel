<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //indicar la tabla que va a modificar el modelo;
    protected $table = 'images';

    //Relacion One To Many
    //array de objectos de los comentarios de la imagen
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    //Relacion One to Many (con los likes)
    // array de objetos de los likes de una imagen
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //Relacion Many to One
    
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
