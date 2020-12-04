<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //indicar la tabla que va a modificar el modelo
    protected $table = 'comments';

    //Relacion Many to One
    //nos da el objeto usuario cuyo id es user_id
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //Relacion Many to One
    //nos da el objeto imagen cuyo id es user_id
    public function image(){
        return $this->belongsTo('App\Image', 'image_id');
    }
}
