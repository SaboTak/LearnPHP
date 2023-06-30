<!-- Notas Logica Autoload PHP -->
<!-- Important:  Notas
1. Utilizamos la funcion nativa de php "spl_autoload_register" para iteresar sobre sobre todos los namespace que tenemos sin necesidad de crear un monton de 
   lineas de codigo para importar los achivos de donde provienen.
 -->

 <?php
    // Declarar una Constante
    define('TEMA', 'Autoload');

    // Importamos los modulos a usar
    use Controllers\UserController;
    use Models\User;

    spl_autoload_register(function ($clase){
        if(file_exists(require_once str_replace('\\', '/', $clase) . '.php')){
            require_once str_replace('\\', '/', $clase) . '.php';
        }
    });

    $user = new User;
    $userController = new UserController;

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TEMA ?></title>
</head>
<body>
    <h1><?php echo TEMA?></h1>
    <p><?php $user->saludar(); ?></p>
    <p><?php $userController->saludar(); ?></p>
</body>
</html>