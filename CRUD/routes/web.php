<?php

    use Lib\Route;

    Route::get('/',function(){
        echo 'Hola mundo';
    });

    Route::get('/Contact',function(){
        echo 'Hola mundo desde contact';
    });

    Route::get('/AboutUs',function(){
        echo 'Hola mundo desde aboutus';
    });

    Route::dispatch();
?>