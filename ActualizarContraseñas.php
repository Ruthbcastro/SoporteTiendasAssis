<?php
require_once 'Servidor/Conexion.php';

try {
    $conexion = (new Conexion())->Cone();

    // Seleccionar todas las contraseñas actuales
    $sql = "SELECT Usuario, Contraseña FROM usuarios";
    $stmt = $conexion->query($sql);

    while ($row = $stmt->fetch()) {
        $usuario = $row['Usuario'];
        $contraseña = $row['Contraseña'];

        // Verificar si la contraseña ya está hasheada
        if (password_get_info($contraseña)['algo'] === 0) { // No está hasheada
            $contraseñaHasheada = password_hash($contraseña, PASSWORD_DEFAULT);

            // Actualizamos la contraseña en la base de datos
            $update = $conexion->prepare("UPDATE usuarios SET Contraseña = :hash WHERE Usuario = :usuario");
            $update->bindParam(':hash', $contraseñaHasheada);
            $update->bindParam(':usuario', $usuario);
            $update->execute();

            echo "Contraseña de $usuario actualizada.\n";
        } else {
            echo "La contraseña de $usuario ya está hasheada.\n";
        }
    }
} catch (PDOException $e) {
    echo "Error al actualizar las contraseñas: " . $e->getMessage();
}
?>
