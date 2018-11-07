<?php

/* Credenciales de la base de datos Asumiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña)*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'koriwasiv2');

/* Intentar conectarse a la base de datos MySQL */
$bd = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verifica la conexión
if($bd === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
