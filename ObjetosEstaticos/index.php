<!-- Notas Logica Objetos Estaticos PHP -->
<!-- Important:  Notas
1. Los atributos y metodos que se indican como statics no son heredados al objeto instanciado,mas sin embargo se pueden usar en 
   los metodos indicandoles de esta forma => self::$VariableStatica.
   si se quiere llamar un atributo o metodo statico desde una clase que herada esta, se utiliza de esta forma:
    parent::$VariableStatica    
 -->

 
 <?php
    // Declarar una Constante
    define('TEMA', 'Objetos Estaticos');

    // Inluimos la clase Carro
    require_once 'Models/Carro.php';

    $carro1 = new Carro("SANDA-2006","2023",4,"amarillo",false);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TEMA ?></title>
</head>
<body>
    <h1><?php echo TEMA ?></h1>

    <p><?php echo Carro::saludar(); ?></p>
</body>
</html>