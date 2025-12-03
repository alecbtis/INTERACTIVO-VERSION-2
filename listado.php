<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de datos</title>
    <style>
        /* Fondo con degradado para mejorar la estética */
        /* Con tutoriales aprendí a usar "linear-gradient" */
        body {
            background: linear-gradient(to right, #0D1B2A, #673AB7);
            font-family: 'Segoe UI', sans-serif;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Contenedor principal más ancho */
        /* Con investigación en páginas web aprendí a usar "box-shadow" para mejorar el diseño */
        .container {
            max-width: 95%; /* Más ancho */
            margin: auto;
            background: rgba(31, 27, 36, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(147, 112, 219, 0.5);
        }

        /* Estilos para la tabla */
        /* Aprendí con tutoriales que bordes y espacio entre celdas mejoran la legibilidad */
        #tabla {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            table-layout: auto; /* Permite que la tabla se expanda mejor */
        }

        #tabla th, #tabla td {
            border: 1px solid white;
            padding: 6px;
            word-wrap: break-word;
        }

        #tabla th {
            background-color: #BB86FC;
            color: white;
        }

        /* Estilos para los enlaces de opciones */
        .botones {
            margin-top: 15px;
        }

        .botones a {
            background-color: #BB86FC;
            color: white;
            padding: 6px 10px; /* Botones más pequeños */
            border-radius: 5px;
            text-decoration: none;
            font-size: 13px;
            display: inline-block;
            margin: 3px;
        }

        .botones a:hover {
            background-color: #9575CD;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Listado de Datos</h1>

  <!-- Enlaces de acción fuera de la tabla -->
<div class="botones">
    <a href="formulario.php">Agregar nuevo registro</a>
   
</div>


    <!-- Tabla de datos -->
    <table id="tabla">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Comentarios</th>
         
            <
        </tr>

        <?php
        // Conexión a la base de datos MySQL
     $conexion = mysqli_connect("sql102.infinityfree.com", "if0_40528875", "Juy8i71dkYQy7s", "interactivo_v2");

        // Verificar la conexión
        if (!$conexion) {
            echo "<p>Error: No se pudo conectar a MySQL.</p>";
            exit;
        }

        // Consulta SQL para obtener los registros
        $resultado = mysqli_query($conexion, "SELECT id, Nombre,  Comentarios FROM respuestas");

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$fila['id']}</td>";
            echo "<td>{$fila['Nombre']}</td>";
           
            echo "<td>{$fila['Comentarios']}</td>";
           
       
           
            echo "</tr>";
        }

        // Cierra la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </table>

   
    
</div>

</body>
</html>