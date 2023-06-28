<!-- Notas Logica Estructuras PHP -->
<!-- Important:  Notas
1. Tener cuidado con los () en los ternarios.
2. En los ciclos repetivos tenemos 2 notaciones importantes que podemos usar a raiz de lo que necesitemos, estas son "break" y "continue"
   un ejemplo de uso es:

   Continue:
   for ($i=0; $i < 10; $i++) { 
        if($i == 7){continue;};
        $suma++;
    };
    ** Lo que hace es saltar el codigo que esta debajo del "continue" es decir termina la ejecucion en esa iteracion pero no rompe el ciclo.

    Break:
   for ($i=0; $i < 10; $i++) { 
        if($i == 7){break;};
        $suma++;
    };
    ** Lo que hace es romper el ciclo hasta ahi, es decir no ejecutara nada que este debajo de el y tampoco continuara el resto del ciclo.

3. El Match se me es interesante, me parece una forma mas rapida y limpia de hacer un swtich.
 -->

 <?php
    // Declarar una Constante
    define('TEMA', 'Estructuras');

    $numero1 = 10;
    $numero2 = 20;
    $suma = $numero1 + $numero2;
    $resultado = "";
    $clase = ["Aylin", "Sebastian", "Santiago"];
    $profesor = "";

    // Estructura IF - ELSE
    if ($numero1 > $numero2) {
        $resultado = "Blanco";
    } elseif ($numero1 == $numero2) {
        $resultado = "Gris";
    } else {
        $resultado = "Negro";
    }

    // Ternarios
    $resultado = $numero1 < $numero2 ? "Negro" : ($numero1 > $numero2 ? "Blanco" : "Gris");

    // Swtich
    switch ($suma) {
        case 10:
            $resultado = "Blanco";
            break;
        case 30:
            $resultado = "Negro";
            break;
        default:
            $resultado = "Gris";
            break;
    }

    // Match
    $resultado = match ($suma) {
        10 => "Blanco",
        30 => "Negro",
        default => "Gris"
    };

    // While
    while ($suma < 30) {
        $suma = $suma + $numero1;
    }

    // Do While
    do {
        $suma = $suma + $numero1;
    } while ($suma < 30);

    // For
    for ($i = 0; $i < 10; $i++) {
        $suma++;
    }

    // ForEach
    foreach ($clase as $indice => $estudiante) {
        if ($estudiante == "Aylin") {
            $profesor = $estudiante;
        }
    }
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
    <p> El color es: <?php echo $resultado ?>.</p>
    <p>La profesora es : <?php echo $profesor ?>.</p>
</body>
</html>
