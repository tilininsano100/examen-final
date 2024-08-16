// Formulario para registrar clientes
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
