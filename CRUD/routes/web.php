<?php

    use Lib\Route;

    use App\Controllers\HomeController;

    Route::get('/',[HomeController::class, 'index']);

    Route::get('/Contact',function(){
        return 'Hola mundo desde contact';
    });

    Route::get('/AboutUs',function(){
        return 'Hola mundo desde aboutus';
    });

    Route::get('/Course/:slug',function($slug){
        return 'Hola mundo el curso es: ' . $slug;
    });

    Route::dispatch();
?>