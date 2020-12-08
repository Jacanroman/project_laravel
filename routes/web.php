<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//para poder utilizar la clase incluimos el model.(en esta caso Image)
//use App\Image;

Route::get('/', function () {

    /* TESTTING THE ORM

    //conseguir todas las images de la tabla images
    $images = Image::all();
    foreach($images as $image){
        echo $image->image_path."<br/>";
        echo $image->description."<br/>";
        
        echo $image->user->name.' '.$image->user->surname.'<br/>';

        //si los comentarios son 1 o mas los muestra si no no
        if(count($image->comments) >=1){
            echo "<br/>";
            echo '<strong>COMENTARIOS</strong><br/>';
            foreach ($image->comments as $comment) {
                echo $comment->user->name.' '.$comment->user->surname.':';
                echo $comment->content . "<br/>";
            }
        }

        echo 'LIKES: '.count($image->likes);
        echo "<hr/>";   
    }
    
    die();
    */
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
