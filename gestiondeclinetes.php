<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
</head>
<body>
    <h1>Registrar Cliente</h1>
    <form method="POST" action="">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="registrar_cliente">Registrar</button>
    </form>

    <?php
    if (isset($_POST['registrar_cliente'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $sql = "INSERT INTO clientes (nombre, email) VALUES ('$nombre', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente registrado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
