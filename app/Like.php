<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $table = 'likes';

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
