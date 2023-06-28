<!-- Notas Logica Funciones PHP -->
<!-- Important:  Notas
1. Para que una variable dentro de la funcion pueda salir del scoope de la funcion y replicar un valor, debemos usar glboal:

    $resultado = 1;
    function factorial($numero){
        global $resultado;
        for ($i=1; $i <= $numero; $i++) { 
            $resultado = $resultado * $i;
        };
    };
    esto alterara directamente la variable $resultado que se encuentra fuera de la funcion "factorial()"
2. Puedo poner el tipo de valor esperado en cada uno de los argumentos props de la funcion para hacerlo fuertemente tipado
3. Podemos definir el tipo de dato que devolvera la funcion especificandolo despues de los parentesis de los argumentos,
   a su vez podemos definir mas de un tipo resultante, como por ej: int || float, permitiendo a la funcion devolver un int o un float
4. Para separar las funciones en otro archivo y llamarlas en las paginas que necesitemos debemos incluir la llamada de dicha funcion de esta manera:
   require_once 'services/TuArchivoDeFunciones.php';
   y luego ya podras llamar a la funcion que necesites como lo hacemos aca:
   TuFuncion();

 -->


 <?php
    // Declarar una Constante
    define('TEMA', 'Funciones');

    // Funciones
    function factorial(int $numero): int{
        $resultado = 1;
        for ($i=1; $i <= $numero; $i++) { 
            $resultado = $resultado * $i;
        };
        return $resultado;
    };

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
    <p>El factorial de 5 es: <?php echo factorial(5) ?>.</p>
</body>
</html>