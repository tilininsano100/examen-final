<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Préstamos</title>
</head>
<body>
    <h1>Consultar Historial de Préstamos</h1>
    <form method="POST" action="">
        <input type="text" name="cliente_id" placeholder="ID Cliente" required>
        <button type="submit" name="consultar_historial">Consultar</button>
    </form>

    <?php
    if (isset($_POST['consultar_historial'])) {
        $cliente_id = $_POST['cliente_id'];

        $sql = "SELECT prestamos.fecha_prestamo, libros.titulo, libros.autor
                FROM prestamos
                JOIN libros ON prestamos.libro_id = libros.libro_id
                WHERE prestamos.cliente_id = '$cliente_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Fecha de préstamo: " . $row['fecha_prestamo'] . " - Título: " . $row['titulo'] . " - Autor: " . $row['autor'] . "<br>";
            }
        } else {
            echo "No se encontraron préstamos para este cliente.";
        }
    }
    ?>
</body>
</html>
