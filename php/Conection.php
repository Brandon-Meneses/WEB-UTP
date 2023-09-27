<?php
$servername = "localhost"; 
$username = "tu_usuario";
$password = "tu_contraseña"; 
$dbname = "proyecto_web";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Para verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
/*
$nombre = "Nombre de ejemplo";
$correo = "correo@example.com";
$contraseña = "contraseña123";*/

$sql = "INSERT INTO Usuarios (Nombre, Correo, Contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro de usuario creado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT ID, Nobre_curso, Descripción, Precio, URL_imagen FROM Cursos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Nombre del curso: " . $row["Nobre_curso"]. " - Descripción: " . $row["Descripción"]. " - Precio: " . $row["Precio"]. " - URL de la imagen: " . $row["URL_imagen"]. "<br>";
    }
} else {
    echo "No se encontraron cursos.";
}
//Cierre de conexion, importante
$conn->close();
?>
