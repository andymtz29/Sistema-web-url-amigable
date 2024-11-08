<?php
session_start();
    if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
    
}
require_once "../app/config/dependencias.php";
require_once "../app/controller/db.php";
// Consulta a la tabla t_producto
$conexion = new Conexion();
$consulta = $conexion->obtener_conexionn()->prepare( "SELECT * FROM t_producto"); 
$consulta->execute(); 
$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Bienvenido, <?php echo $_SESSION['usuario']['usuario']; ?>!</h1>
                <a href="./editar-usuario.php" class="btn btn-primary mb-3">Editar Usuario</a>
                <a id="cerrar" class="btn btn-danger mb-3">Cerrar Sesión</a>
            </div>
        </div>

        <h2 class="text-center mb-4">Lista de Productos</h2>

        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['id_producto']; ?></td>
                        <td><?php echo $producto['producto']; ?></td>
                        <td><?php echo '$' . number_format($producto['precio'], 2); ?></td>
                        <td><?php echo $producto['cantidad']; ?></td>
                        <td class="text-center">
                            <a href="../app/controller/editar-prod.php?id=<?php echo $producto['id_producto']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="eliminar_producto(<?php echo $producto['id_producto']; ?>);">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Función para cerrar sesión
        document.getElementById('cerrar').addEventListener('click', function () {
            window.location.href = './cerrar-sesion.php';
        });
    </script>
</body>



<div style="text-align: center; margin-bottom: 20px;">
    <a href="../app/controller/agregar-prod.php" >Agregar Producto</a>
</div>
<script src="../public/js/crud.js"></script>
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/DT.css">
<script src="../public/js/bootstrap.bundle.min.js"></script>
<script src="../public/js/cerrar-sesion.js" type=""></script>

</body>