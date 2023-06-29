<!-- Notas Logica Arrays PHP -->
<!-- Important:  Notas
1. En PHP podemos dar indices a nuestros objetos
2. La mejor forma de recorrer los array es con ForEach
 -->

 <?php
    // Declarar una Constante
    define('TEMA', 'Arrays');

    $array = [
        [   "nombre" => "Aylin", //uso de indices
            "apellido" =>"R",
            "celular" =>  0000000,
            "especialidad" => [
                "pregrado" =>"Administradora de Empresas",
                "postgrado" => "Analista de datos"
                ]
        ],
        [
            "nombre" => "Sebastian", //uso de indices
            "apellido" =>"G",
            "celular" =>  0000001,
            "especialidad" => "Vendedor de Bolis"
        ],
        [
            "nombre" => "Santiago", //uso de indices
            "apellido" =>"B",
            "celular" =>  0000002,
            "especialidad" => "Ingeniero de sistemas"
        ]
    
    ];
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
    <p>El nombre de la profesora es: <?php echo $array[0]["nombre"] ?> y su especialidad es "<?php echo $array[0]["especialidad"]["postgrado"] ?>".</p>
    <p></p>

</body>
</html>