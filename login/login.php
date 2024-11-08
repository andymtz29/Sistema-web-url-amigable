<?php
session_start();
    if (isset($_SESSION['usuario'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <style>
body {
    font-family: Arial, sans-serif;
    background-image: url('https://i.pinimg.com/736x/f4/82/6a/f4826ad396c7d299f79736521cb1fda8.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    color: #151515;
}


        .login-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        .cerrar-sesion, .editar {
            position: absolute;
            top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .cerrar-sesion {
            right: 10px;
            background-color: #ff4d4d;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cerrar-sesion:hover {
            background-color: #ff1a1a;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .editar {
            right: 160px;
            background-color: #4CAF50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .editar:hover {
            background-color: #45a049;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .cerrar-sesion i, .editar i {
            margin-right: 8px;
        }
    </style>


</head>
<body>
    
    
    <script src="./public/js/jquery.js"></script>
    <script src="./public//js/login.js"></script>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
