<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Libros</title>
</head>
<body>
    <h1>Registrar Libro</h1>
    <form method="POST" action="">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="text" name="isbn" placeholder="ISBN" required>
        <button type="submit" name="registrar_libro">Registrar</button>
    </form>

    <?php
    if (isset($_POST['registrar_libro'])) {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $isbn = $_POST['isbn'];
        $sql = "INSERT INTO libros (titulo, autor, isbn) VALUES ('$titulo', '$autor', '$isbn')";
        if ($conn->query($sql) === TRUE) {
            echo "Libro registrado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
