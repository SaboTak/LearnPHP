<!-- Notas Logica Objetos PHP -->
<!-- Important:  Notas
1. Los parametros del constructor deben enviarse en el mismo orden que el contructor de la clase.
2. Si queremos editar un atributo del objeto creado se hace de esta forma (siguiendo el ejemplo del carro):
    $carro1->setPlaca("SANDA-2006");
    $carro1->setModelo("2023");
    $carro1->setRuedas(4);
    $carro1->setColor("amarillo");
    $carro1->setUsado(false);
3. Si queremos que una clase no se herede, agregamos la palabra reserveda "final" al inicio de la instancia de la clase.
   Tambien se puede aplicar a un metodo especifico de la funcion para que solamente esa funcion no pueda ser heredada.
 -->

 
 <?php
    // Declarar una Constante
    define('TEMA', 'Objetos');

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