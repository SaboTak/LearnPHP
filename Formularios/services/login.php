<?php

    //Creamos una funcion para el login, no tendra validaciones solo el nombre.

    function login(string $usuario, string $password): bool {
        if($usuario == "Sabo"){
            return true;
        }else{
            return false;
        }
    }



?>