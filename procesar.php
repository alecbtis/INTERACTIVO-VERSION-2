<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Conectar a MySQL (usando las credenciales de InfinityFree)
$conexion = mysqli_connect("sql302.infinityfree.com", "if0_40528875", "Juy8i71dkYQy7s", "if0_40528875_interactivo_v2");

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("<p>Error: No se pudo conectar a MySQL: " . mysqli_connect_error() . "</p>");
}

// Capturar datos del formulario
$nombre_post = $_POST['campoNombre'] ?? "";
$comentarios_post = $_POST['campoComentarios'] ?? "";

// Validación de los campos (asegúrate de que no estén vacíos)
if (empty($nombre_post) || empty($comentarios_post)) {
    echo "<p>Error: Nombre o comentarios vacíos. Asegúrate de que el formulario esté completo.</p>";
    exit;
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO respuestas (Nombre, Comentarios) VALUES ('$nombre_post', '$comentarios_post')";

if (mysqli_query($conexion, $sql)) {
    // Obtener el ID del usuario recién insertado
    $id_usuario = mysqli_insert_id($conexion);
    $registro_exitoso = true;
} else {
    $registro_exitoso = false;
    $error_message = mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Gracias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #2c0074, #663399);
            color: white;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        a button {
            background-color: #bb86fc;
            border: none;
            padding: 15px 30px;
            margin: 10px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        a button:hover {
            background-color: #985eff;
        }
    </style>
</head>
<body>
    <?php if ($registro_exitoso): ?>
        <h1>¡Gracias por participar!</h1>
        <p>Tu comentario fue guardado correctamente 🎉</p>
        <p><strong>ID de usuario:</strong> <?php echo $id_usuario; ?></p>
    <?php else: ?>
        <h1>Error al guardar los datos</h1>
        <p>No se pudo guardar tu comentario. Por favor, intenta de nuevo más tarde.</p>
        <p><strong>Error:</strong> <?php echo $error_message; ?></p>
    <?php endif; ?>

    <a href="index.html"><button>Volver al inicio</button></a>
    <a href="listado.php"><button>Ver libro de visitas</button></a>
</body>
</html>
