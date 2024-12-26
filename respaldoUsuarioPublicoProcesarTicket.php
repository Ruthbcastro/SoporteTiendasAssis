<?php
require_once 'Servidor/Conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Establecer conexión a la base de datos
        $conexion = (new Conexion())->Cone();

        // Validar y obtener datos básicos
        $idTipoDepartamento = $_POST['id_tipos_departamentos'] ?? null;
        $nombre = $_POST['nombre'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $tema = $_POST['tema'] ?? '';
        $mensaje = $_POST['mensaje'] ?? '';
        //$adjuntos = $_FILES['adjuntos']['name'] ?? null;



        echo $idTipoDepartamento;
        echo $nombre; 
        echo $correo;
        echo $tema;
        echo $mensaje;
        echo $adjuntos;

        
        






        if (!$idTipoDepartamento || !$nombre || !$correo || !$tema || !$mensaje) {
            throw new Exception("Datos incompletos. Por favor, completa todos los campos requeridos.");
        }

        // Manejar archivo adjunto si existe
        $rutaAdjuntos = null;
        if ($adjuntos) {
            $rutaAdjuntos = 'uploads/' . basename($_FILES['adjuntos']['name']);
            if (!move_uploaded_file($_FILES['adjuntos']['tmp_name'], $rutaAdjuntos)) {
                throw new Exception("Error al subir el archivo adjunto.");
            }
        }

        // Insertar el ticket
        $queryInsertTicket = "INSERT INTO tickets (Estado_Ticket, Fecha_Creacion, Tema, Mensaje, Adjuntos, id_Tipo_Departamento) 
                              VALUES ('Nuevo', NOW(), :tema, :mensaje, :adjuntos, :id_departamento)";
        $stmtTicket = $conexion->prepare($queryInsertTicket);
        $stmtTicket->bindParam(':tema', $tema, PDO::PARAM_STR);
        $stmtTicket->bindParam(':mensaje', $mensaje, PDO::PARAM_STR);
        $stmtTicket->bindParam(':adjuntos', $rutaAdjuntos, PDO::PARAM_STR);
        $stmtTicket->bindParam(':id_departamento', $idTipoDepartamento, PDO::PARAM_INT);
        $stmtTicket->execute();
        $idTicket = $conexion->lastInsertId();

        if (!$idTicket) {
            throw new Exception("No se pudo crear el ticket.");
        }

        // Procesar campos personalizados
        foreach ($_POST as $nombreCampo => $valorCampo) {
            if (strpos($nombreCampo, 'campo_') === 0) {
                $idCampo = str_replace('campo_', '', $nombreCampo);
                
                // Insertar respuesta del campo personalizado
                $queryRespuesta = "INSERT INTO respuestas_campos_personalizados (id_campo_personalizado, id_ticket, valor) 
                                    VALUES (:id_campo, :id_ticket, :valor)";
                $stmtRespuesta = $conexion->prepare($queryRespuesta);
                $stmtRespuesta->bindParam(':id_campo', $idCampo, PDO::PARAM_INT);
                $stmtRespuesta->bindParam(':id_ticket', $idTicket, PDO::PARAM_INT);
                $stmtRespuesta->bindParam(':valor', $valorCampo, PDO::PARAM_STR);
                $stmtRespuesta->execute();
            }
        }

        echo "<script>alert('Ticket enviado exitosamente.'); window.location.href = 'usuarioPublico_FormularioTicket.php';</script>";

    } catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = 'usuarioPublico_FormularioTicket.php';</script>";
    }
} else {
    header("Location: usuarioPublico_FormularioTicket.php");
    exit;
}
