<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Préstamos</title>
</head>
<body>
    <h1>Registrar Préstamo</h1>
    <form method="POST" action="">
        <input type="text" name="cliente_id" placeholder="ID Cliente" required>
        <input type="text" name="libro_id" placeholder="ID Libro" required>
        <input type="date" name="fecha_prestamo" required>
        <button type="submit" name="registrar_prestamo">Registrar</button>
    </form>

    <?php
    if (isset($_POST['registrar_prestamo'])) {
        $cliente_id = $_POST['cliente_id'];
        $libro_id = $_POST['libro_id'];
        $fecha_prestamo = $_POST['fecha_prestamo'];
        $sql = "INSERT INTO prestamos (cliente_id, libro_id, fecha_prestamo) VALUES ('$cliente_id', '$libro_id', '$fecha_prestamo')";
        if ($conn->query($sql) === TRUE) {
            echo "Préstamo registrado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>