<?php
require_once 'Servidor/Conexion.php';
require_once 'Login.php';

session_start();

// Verificar el método de solicitud
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: usuarioNormal_Login.php?error=Método de solicitud no permitido.');
    exit;
}

// Validar token CSRF
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    header('Location: usuarioNormal_Login.php?error=CSRF token inválido.');
    exit;
}

// Obtener datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar que los campos no estén vacíos
if (empty($usuario) || empty($contrasena)) {
    header('Location: usuarioNormal_Login.php?error=Por favor, completa todos los campos.');
    exit;
}

try {
    // Instanciar la clase Login y validar las credenciales
    $login = new Login();
    $mensaje = $login->iniciarSesion($usuario, $contrasena);

    // Si las credenciales son válidas, redirigir al dashboard
    if (strpos($mensaje, 'exitoso') !== false) {
        header('Location: UsuarioNormal_Dashboard.php');
        exit;
    } else {
        header("Location: usuarioNormal_Login.php?error=" . urlencode($mensaje));
        exit;
    }
} catch (Exception $e) {
    // En caso de error, redirigir con el mensaje de excepción
    header('Location: usuarioNormal_Login.php?error=' . urlencode("Error: " . $e->getMessage()));
    exit;
}
////////
try {
    $login = new Login();
    $mensaje = $login->iniciarSesion($usuario, $contrasena);
    
    // Depuración
    var_dump($mensaje);
    exit;

    if (strpos($mensaje, 'exitoso') !== false) {
        header('Location: UsuarioNormal_Dashboard.php');
        exit;
    } else {
        header("Location: usuarioNormal_Login.php?error=" . urlencode($mensaje));
        exit;
    }
} catch (Exception $e) {
    header('Location: usuarioNormal_Login.php?error=' . urlencode("Error: " . $e->getMessage()));
    exit;
}

?>
