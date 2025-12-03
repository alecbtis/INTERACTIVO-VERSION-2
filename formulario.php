<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libro de visitas</title>
    <style>
        /* Fondo con degradado para mejorar la estética (con tutoriales aprendí a usar "linear-gradient") */
        body {
            background: linear-gradient(to right, #0D1B2A, #673AB7);
            font-family: 'Segoe UI', sans-serif;
            color: white;
            text-align: center;
            padding: 40px;
        }

        /* Contenedor del formulario para centrarlo y darle mejor presentación */
        .container {
            max-width: 600px;
            margin: auto;
            background: rgba(31, 27, 36, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(147, 112, 219, 0.5); /* Con tutoriales aprendí a usar "box-shadow" */
        }

        /* Organización de los elementos del formulario */
        .form-group {
            display: flex;
            flex-direction: column;
            text-align: left;
            margin-bottom: 20px;
        }

        /* Estilo de etiquetas */
        label {
            font-size: 18px;
            margin-bottom: 8px;
        }

        /* Campos de entrada con diseño personalizado */
        input, select, textarea {
            padding: 12px;
            border-radius: 8px;
            background-color: #311B92;
            color: white;
            border: none;
            font-size: 16px;
            width: 100%;
        }

        /* Botón de envío con estilos */
        input[type="submit"] {
            background-color: #BB86FC;
            font-weight: bold;
            cursor: pointer;
            padding: 15px;
            transition: 0.3s;
            width: 100%;
            border-radius: 8px;
            font-size: 18px;
        }

        /* Efecto hover en el botón */
        input[type="submit"]:hover {
            background-color: #9575CD;
        }

        /* Contenedor de la imagen */
        .image-container {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Estilo para la imagen */
        img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(147, 112, 219, 0.4); /* Con investigación aprendí a hacer efectos visuales */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>FORMULARIO</h1>

        

        <!-- Formulario -->
        <form method="POST" action="procesar.php">
            <div class="form-group">
                <label>Nombre:</label>
                <input name="campoNombre" type="text" required> <!-- Campo obligatorio -->
            </div>
         
          
            <div class="form-group">
                <label>COMENTARIOS:</label>
                <textarea name="campoComentarios" required></textarea> <!-- Área de texto para comentarios -->
            </div>
          
        
            <!-- Botón de envío -->
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>