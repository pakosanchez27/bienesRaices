<?php 

// Importar la conexion 

require 'includes/config/databases.php';
$db = conectarDB();

// Crear un email y password
$email = "javier.sanchezjps27@gmail.com";
$password = "Fa192241085";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);



//query para crear el usuario 
$query = " INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";

echo $query;



 mysqli_query($db, $query);