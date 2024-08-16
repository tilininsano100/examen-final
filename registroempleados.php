// Conexión a la base de datos
$conn = new mysqli('localhost', 'usuario', 'contraseña', 'biblioteca');

// Formulario para registrar empleados
if (isset($_POST['registrar_empleado'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $sql = "INSERT INTO empleados (nombre, email) VALUES ('$nombre', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Empleado registrado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
