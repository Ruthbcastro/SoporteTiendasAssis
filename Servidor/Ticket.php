<?php

require_once ("Conexion.php");


class Ticket extends Conexion{

    public function tickets($datos){
        $con = $this->Cone;
        $sql = "SELECT * FROM tickets";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }



    public function agregarTicket($datos){

        $con = $this->Cone;
        $sql = "INSERT INTO tickets(
        Estado_Ticket,
        Fecha_Creacion,
        Tema,
        Mensaje,
        Usuario,
        Departamento)
        VALUES (?,?,?,?,?,?)      
        ";
        try{
        $stmt = $con->prepare($sql);
        
        $stmt->bindParam(1, $datos['Estado_Ticket'], PDO::PARAM_STR);
        $stmt->bindParam(2, $datos['Fecha_Creacion'], PDO::PARAM_STR);
        $stmt->bindParam(3, $datos['Tema'], PDO::PARAM_STR);
        $stmt->bindParam(4, $datos['Mensaje'], PDO::PARAM_STR);
        $stmt->bindParam(5, $datos['Usuario'], PDO::PARAM_STR);
        $stmt->bindParam(6, $datos['Departamento'], PDO::PARAM_STR);

        $stmt->execute();
        return 1;
    }catch(PDOException $e){
        error_log("Error al agregar el usuario");
        return 0;
    }
    }
}




?>