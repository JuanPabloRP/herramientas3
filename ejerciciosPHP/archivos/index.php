<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    // String con los datos a guardar
    $datos = "Nombre: $nombre\nApellido: $apellido\nEdad: $edad\n";

    // url archivo
    $archivo = 'data.txt';

    // Se abre el archivo para obtener el contenido existente
    $handle = fopen($archivo, 'a');

    if ($handle === false) {
        echo "Error al abrir el archivo.";
    } else {
        // Se escribe en el archivo
        if (fwrite($handle, $datos) !== false) {
            echo "Datos guardados correctamente en el Archivo.";
        } else {
            echo "Error al guardar los datos.";
        }

        // Se cierra el archivo
        fclose($handle);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos Personales</title>
</head>
<body>
    <h2>Ingrese sus Datos Personales</h2>
    <form action="index.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br>

        <input type="submit" value="Guardar datos">
    </form>
</body>
</html>