<?php 

class Conexion {
    private $host = "localhost";  
    private $db = "headdesk";    
    private $user = "root"; 
    private $pass = ""; 
    private $charset = "utf8mb4";   
    private $pdo;

    public function Cone() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
            //echo $dsn;  
            return $this->pdo;
        } catch (PDOException $e) {
            echo "Conexión fallida: " . $e->getMessage();
            return null;
        }
    }

    public function Users() {
        $conexion = $this->Cone();
        
        if (!$conexion) {
            die("Error al conectar con la base de datos.");
        }

        $sql = "SELECT * FROM usuarios ";
        
        try {
            $stmt = $conexion->query($sql);
            $usuarios = $stmt->fetchAll(); // Array asociativo con todos los usuarios
            return $usuarios;
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return null;
        }
    }

    public function Departamentos() {
        $conexion = $this->Cone();
        
        if (!$conexion) {
            die("Error al conectar con la base de datos.");
        }

        $sql = "SELECT * FROM tipos_departamentos ";
        
        try {
            $stmt = $conexion->query($sql);
            $usuarios = $stmt->fetchAll(); // Array asociativo con todos los usuarios
            return $usuarios;
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return null;
        }
    }

    public function Tickets() {
        $conexion = $this->Cone();
        
        if (!$conexion) {
            die("Error al conectar con la base de datos.");
        }

        $sql = "SELECT * FROM tickets ";
        
        try {
            $stmt = $conexion->query($sql);
            $usuarios = $stmt->fetchAll(); // Array asociativo con todos los usuarios
            return $usuarios;
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return null;
        }
    }
}
?>
