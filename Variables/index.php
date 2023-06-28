<!-- Notas Logica variables PHP -->
<!-- Important:  Notas
1. El nombre de todas las variables inicia con $
2. Las variables son sensibles a Mayusculas y Minusculas (user !== USER)
3. Si declararemos una constante en objeto seria asi:
    define('ANIMALES', [
        "gato",
        "perro",
        "loro"
    ]) 
    y para acceder a ellas desde el DOM seria: ANIMALES[0]
4. Puedo utilzar las variables, incluso las constantes para condicionales como IF
5. Las operaciones entre Variables siguen el orden matematico natural, es decir permiten operaciones como:
   "+","-","*","/","%", etc. Tambien, se ejecutan en orden matematico natural, es decir, primero "*"y "/" y luego las basicas("+","-").
   Si se hace uso de () para agrupar operaciones iniciara por ellas como en la matematica natural.
6. Utilizamos el metodo var_dump() para retornar el tipo de variable que recibe como parametro.
7. Las variables utilizan estos operadores logicos y de comparacion:
        "==" para comparar que los valores de 2 variables entre si sean iguales
        "!=" para comparar que los valores de 2 variables entre si sean diferentes
        ">"  para comparar que los valores de 2 variables entre si donde la primera variable sea mayor que la segunda
        "<"  para comparar que los valores de 2 variables entre si donde la primera variable sea menor que la segunda
        "&&" para comparar que 2 expresiones sean del mismo tipo (true o false)
        "||" para comparar que 2 expresiones almenos una sea verdadera
 -->



<?php
    // Variables Basicas 
    $Nombre = "Sebastian";      //String
    $Edad = 23;                 //Number
    $Altura = 1.80;             //Decimal
    $Graduado = true;           //Boolean


    // Declarar una Constante
    define('TEMA', 'Variables') 

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
    <p>Hola, soy  <?php echo $Nombre ?>!</p>
    <p>Tengo <?php echo $Edad ?> años.</p>
    <p>Mido alrededor de <?php echo $Edad ?>m</p>
</body>
</html>