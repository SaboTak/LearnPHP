<!-- Notas Logica Bienvenidos PHP -->
<!-- Important:  Notas
1. 
 -->

<?php
    // Declarar una Constante
    define('TEMA', 'Bienvenidos');

    $msj = "Bienvenidos a mis notas!";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TEMA ?></title>
</head>
<body>
    <h1><?php echo $msj ?></h1>
</body>
</html>