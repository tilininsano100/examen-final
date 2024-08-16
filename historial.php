// Consulta del historial de préstamos
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
