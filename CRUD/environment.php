<?php
    $envVars = parse_ini_file('../../.env');

    foreach ($envVars as $key => $value) {
        $_ENV[$key] = $value;
    }
?>