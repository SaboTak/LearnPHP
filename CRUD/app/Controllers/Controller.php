<?php
namespace App\Controllers;
class Controller{

    public function view($route,$data = []){
        //Destructurar Array de params
        extract($data);
        $route = str_replace('.','/',$route);
        if(file_exists("../app/Views/{$route}.php")){
            ob_start();
            include "../app/Views/{$route}.php";
            $content = ob_get_clean();
            return $content;
            #TODO:Crear un Layout y cargar el contenido en Base a un Layout.
        }else{
            return "No existe esta vista";
        }
    }

}
?>