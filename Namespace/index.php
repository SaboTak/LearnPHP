<!-- Notas Logica Namespace PHP -->
<!-- Important:  Notas
1. Los namespace se utilizar para diferencias clases con mismos nombres pero de diferentes modulos.
 -->

 <?php
    // Declarar una Constante
    define('TEMA', 'Namespace');

    // Inluimos la clase Carro
    require_once 'Models-1/Carro.php';
    require_once 'Models-2/Carro.php';

    // Rompemos el conflicto de forma general en el archivo para no estar especificando cada vez
    use Models1\Carro as Carro1;
    use Models2\Carro as Carro2;

    $carro1 = new Carro1("SANDA-2006","2023",4,"amarillo",false);


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