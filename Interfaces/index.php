<!-- Notas Logica Interfaces PHP -->
<!-- Important:  Notas
1. Las interfaces son estandares que configuramos para tener una homogeneidad en nuestras clases
   como podemos notar , en nuestra interfaz de ejemplo declaramos la funcion "getData()" que quiere decir esto?
   que cada clase donde implementemos la interfaz debera tener si o si las funciones indicadas en la interfaz,teniendo en cuenta
   que deberan llamarse igual y tener la misma cantidad de argumentos.
 -->




<?php

interface base{
    public function getData();
}


class Prueba implements base{
    public function getData(){
        echo "Hola! use una interfaz.";
    }
}

?>