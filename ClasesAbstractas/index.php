<!-- Notas Logica Abstractas PHP -->
<!-- Important:  Notas
1. Las clases abstractas son estandares que configuramos para tener una homogeneidad en nuestras clases
   como podemos notar , en nuestra clase de ejemplo declaramos la funcion "setData()" que quiere decir esto?
   que cada clase donde implementemos la clase debera tener si o si las funciones indicadas en la clase,teniendo en cuenta
   que deberan llamarse igual y tener la misma cantidad de argumentos.
2. la diferencia entre las interfaces y las clases abstractas es que en estas se permite usar el protected para los metodos y atributos
 -->

 <?php

abstract class base{
    abstract protected function setData();
    public function getData(){
        echo $this->setData();
    }
};


class Prueba extends base{
    protected function setData(){
        return "Probando clases abstractas";
    } 
}

$Prueba = new Prueba;

$Prueba->getData();

?>