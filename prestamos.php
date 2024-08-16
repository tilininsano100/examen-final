// Formulario para registrar préstamos
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

