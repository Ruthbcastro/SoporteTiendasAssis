<?php

require_once "Conexion.php";

class Ticket extends Conexion
{
    public function obtenerTickets()
    {
        try {
            $con = $this->Cone();
            $sql = "SELECT * FROM tickets";



            
            $stmt = $con->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error al obtener tickets: " . $e->getMessage());
            return [];
        }
    }


    //public function agregarTicket($datos, $camposPersonalizados = [])
    public function agregarTicket($datos)
    {
        try {
            $con = $this->Cone();

            // Iniciar transacción
            $con->beginTransaction();

            // Insertar ticket principal
            $sql = "INSERT INTO tickets (Estado_Ticket, Tema, Mensaje, Usuario, id_Tipo_Departamento)
                    VALUES (:Estado_Ticket, :Tema, :Mensaje, :Usuario, :id_Tipo_Departamento)";
            $stmt = $con->prepare($sql);
            $stmt->execute([
                ':Estado_Ticket' => $datos['Estado_Ticket'],
                ':Tema' => $datos['Tema'],
                ':Mensaje' => $datos['Mensaje'],
                ':Usuario' => $datos['Usuario'],
                ':id_Tipo_Departamento' => $datos['id_Tipo_Departamento'],
            ]);

            $idTicket = $con->lastInsertId();

            // Insertar campos personalizados
            if (!empty($datos['camposPersonalizados'])) { 
                $sqlCampo = "INSERT INTO respuestas_campos_personalizados (id_campo_personalizado, id_ticket, valor)
                            VALUES (:idCampo, :idTicket, :valor)";
                $stmtCampo = $con->prepare($sqlCampo);
                foreach ($datos['camposPersonalizados'] as $campo) {
                    $stmtCampo->execute([
                        ':idCampo' => $campo['idCampo'],
                        ':idTicket' => $idTicket,
                        ':valor' => $campo['valor'],
                    ]);
                }
            }

            // Confirmar transacción
            $con->commit();

            return $idTicket;

        } catch (PDOException $e) {
            // Revertir transacción si algo falla
            if ($con->inTransaction()) {
                $con->rollBack();
            }
            error_log("Error al agregar ticket: " . $e->getMessage());
            return false;
        }
    }




    /*public function AddTicket($datos){
        try {
            $con = $this->Cone();

            // Iniciar transacción
            $con->beginTransaction();

            // Insertar ticket principal
            $sql = "INSERT INTO tickets (Estado_Ticket, Tema, Mensaje, Usuario, id_Tipo_Departamento)
                    VALUES (:Estado_Ticket, :Tema, :Mensaje, :Usuario, :id_Tipo_Departamento)";
            $stmt = $con->prepare($sql);
            $stmt->execute([
                ':Estado_Ticket' => $datos['Estado_Ticket'],
                ':Tema' => $datos['Tema'],
                ':Mensaje' => $datos['Mensaje'],
                ':Usuario' => $datos['Usuario'],
                ':id_Tipo_Departamento' => $datos['id_Tipo_Departamento'],
            ]);

            $idTicket = $con->lastInsertId();

            // Insertar campos personalizados
            if (!empty($datos['camposPersonalizados'])) { 
                $sqlCampo = "INSERT INTO respuestas_campos_personalizados (id_campo_personalizado, id_ticket, valor)
                            VALUES (:idCampo, :idTicket, :valor)";
                $stmtCampo = $con->prepare($sqlCampo);
                foreach ($datos['camposPersonalizados'] as $campo) {
                    $stmtCampo->execute([
                        ':idCampo' => $campo['idCampo'],
                        ':idTicket' => $idTicket,
                        ':valor' => $campo['valor'],
                    ]);
                }
            }

            // Confirmar transacción
            $con->commit();

            return $idTicket;

        } catch (PDOException $e) {
            // Revertir transacción si algo falla
            if ($con->inTransaction()) {
                $con->rollBack();
            }
            error_log("Error al agregar ticket: " . $e->getMessage());
            return false;
        }
    }*/



    public function addTicket($datos) {
        try {
            $con = $this->Cone();
            // Insertar ticket principal
            $sql = "INSERT INTO tickets (Estado_Ticket, Tema, Mensaje, id_Usuario, id_Tipo_Departamento)
                    VALUES (:Estado_Ticket, :Tema, :Mensaje, :id_Usuario, :id_Tipo_Departamento)";
            $stmt = $con->prepare($sql);
            $stmt->execute([
                ':Estado_Ticket' => $datos['Estado_Ticket'],
                ':Tema' => $datos['Tema'],
                ':Mensaje' => $datos['Mensaje'],
                ':id_Usuario' => $datos['Usuario'],
                ':id_Tipo_Departamento' => $datos['id_Tipo_Departamento'],
            ]);
    
            if ($stmt->rowCount() === 0) {
                return "Error En La Ejecucion";
            }
            return "1";
    
        } catch (PDOException $e) {
            error_log("Error en addTicket (PDOException): " . $e->getMessage());
            return "Error en la conexión o ejecución";
        }
    }
    
    

    
}
?>