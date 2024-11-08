<style>
     body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5af19, #f12711);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Contenedor principal */
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo translúcido */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        /* Título del formulario */
        h1 {
            color: #444;
            font-size: 26px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Estilos de los labels e inputs */
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #f5af19;
            outline: none;
            box-shadow: 0 0 8px rgba(245, 175, 25, 0.3);
        }

        /* Botón de guardar */
        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        /* Enlace de regresar */
        .regresar {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        .regresar:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Editar Producto</h1>

        <form id="editar-form">
            <div class="form-group">
                <label for="producto">Producto:</label>
                <input type="text" id="producto" value="<?php echo $producto['producto']; ?>" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" id="precio" value="<?php echo $producto['precio']; ?>" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" value="<?php echo $producto['cantidad']; ?>" required>
            </div>

            <button type="button" onclick="editar_producto(<?php echo $producto['id_producto']; ?>)">Guardar Cambios</button> <!-- Llamada a la función JS -->
        </form>

        <a href="../../views/home.php" class="regresar">Regresar al listado</a>
    </div>
    <script src="../../public/js/crud.js"></script>

</body>