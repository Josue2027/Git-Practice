<?php
session_start();
include("php/conexion.php");

// Consulta sucursales
$sql = "SELECT * FROM sucursales";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales de Don Toño</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<?php require_once("components/navbar.php"); ?>

<div class="container mt-5">

    <h2 class="mb-4">Nuestras Sucursales</h2>

    <div class="row">

        <?php while($sucursales = $resultado->fetch_assoc()): ?>

        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm">

                <!-- Imagen -->
                <img 
                    src="img/sucursales/<?php echo $sucursales['imagen2']; ?>" 
                    class="card-img-top img-fluid"
                    style="height: 250px; object-fit: cover;"
                    alt="Sucursal"
                >

                <!-- Contenido -->
                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $sucursales['nombre']; ?>
                    </h5>

                    <p class="card-text">
                        <?php echo $sucursales['descripcion']; ?>
                    </p>

                    <p class="card-text">
                        <?php echo $sucursales['ubicacion'] ?? ''; ?>
                    </p>

                    <a href="#" class="btn btn-primary">
                        Ver más
                    </a>

                </div>

            </div>

        </div>

        <?php endwhile; ?>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>