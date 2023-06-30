<!-- Notas Logica Trait PHP -->
<!-- Important:  Notas
1. Los trait en PHP es la forma en la que emulamos una herencia multiple de clases
 -->

 <?php
    // Declarar una Constante
    define('TEMA', 'Trait');

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

    <p>La placa del carro que compramos es: <?php echo $carro1->getPlaca() ?></p>
</body>
</html>