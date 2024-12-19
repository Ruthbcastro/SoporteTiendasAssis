<?php
require_once 'Servidor/Conexion.php';

class Login
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = (new Conexion())->Cone();
        if (!$this->conexion) {
            throw new Exception("Error al conectar con la base de datos.");
        }
    }

    /**
     * Valida las credenciales del usuario.
     * @param string $usuario El nombre de usuario.
     * @param string $contrasena La contraseña del usuario.
     * @return bool Verdadero si el usuario es válido, falso en caso contrario.
     */
    public function validarCredenciales($usuario, $contrasena)
    {
        $sql = "SELECT Usuario, Contraseña FROM usuarios WHERE LOWER(Usuario) = LOWER(:usuario)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);

        try {
            $stmt->execute();
            $resultado = $stmt->fetch();

            // Depuración: Verificar si se obtienen datos
            if ($resultado) {
                // Verificar la contraseña
                if (password_verify($contrasena, $resultado['Contraseña'])) {
                    return true; // Credenciales válidas
                } else {
                    echo "Contraseña incorrecta.";
                    return false;
                }
            } else {
                echo "Usuario no encontrado.";
                return false; // Usuario no encontrado
            }
        } catch (PDOException $e) {
            throw new Exception("Error al validar credenciales: " . $e->getMessage());
        }
    }

    /**
     * Maneja el proceso de inicio de sesión.
     * @param string $usuario El nombre de usuario.
     * @param string $contrasena La contraseña del usuario.
     * @return string Mensaje sobre el resultado del inicio de sesión.
     */
    public function iniciarSesion($usuario, $contrasena)
    {
        if (empty($usuario) || empty($contrasena)) {
            return "Por favor, ingresa tanto tu usuario como tu contraseña.";
        }

        if ($this->validarCredenciales($usuario, $contrasena)) {
            // Iniciar sesión del usuario
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['usuario'] = $usuario;
            return "Inicio de sesión exitoso. ¡Bienvenido, $usuario!";
        } else {
            return "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
        }
    }

    /**
     * Verifica manualmente un hash de contraseña para pruebas.
     * @param string $password La contraseña ingresada.
     * @param string $hash El hash almacenado.
     * @return void
     */
    public function verificarHash($password, $hash)
    {
        if (password_verify($password, $hash)) {
            echo "Contraseña válida.";
        } else {
            echo "Contraseña inválida.";
        }
    }
}
?>
