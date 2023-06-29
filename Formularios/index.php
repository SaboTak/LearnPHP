<!-- Notas Logica Formularios PHP -->
<!-- Important:  Notas
1. 
 -->

 <?php

    // Importamos la funcion del login
    require_once 'services/login.php';

    // Declarar una Constante
    define('TEMA', 'Formularios');

    $Error= "";

    // Verificar si se envió el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos del formulario
        $username = $_POST['username'];
        $password = $_POST['passworduser'];

        $Comprobacion = login($username, $password);

        if($Comprobacion){
            header('Location: Welcome/');
            exit;
        }else{
            $Error= "Usuario o Contraseña incorrecta.";
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

    <form method="POST" action="">
        <label for="user">
            Usuario:
            <input id="user" type="text" name="username" placeholder="Sabo">
        </label>

        <br>

        <label for="password">
            Contraseña:
            <input id="password" type="password" name="passworduser" placeholder="*******">
        </label>

        <br>

        <button type="submit">
            Iniciar Sesion
        </button>

    </form>

    <br>

    <p><?php echo $Error ?></p>

</body>
</html>