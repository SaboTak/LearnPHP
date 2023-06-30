<!-- Notas Logica Objetos FluentInterface PHP -->
<!-- Important:  Notas
1. Al retornar los objetos en los metodos, podemos concatenar acciones de forma mas limpia.
 -->

 
 <?php
    // Declarar una Constante
    define('TEMA', 'Objetos');

    // Inluimos la clase Carro
    require_once 'Models/Carro.php';

    $carro1 = new Carro("SANDA-2006","2023",4,"amarillo",false);
    // Uso del Fluent Interface
    $carro1 -> setColor("Negro")
            -> setModelo("2021")
            -> setPlaca("YYY-999")
            -> setRuedas("6")
            -> setUsado(true);


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

    <p>La placa del carro que compramos es: <?php echo $carro1->getPlaca() ?></p>
</body>
</html>