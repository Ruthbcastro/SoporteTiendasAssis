<?php
require_once ('Servidor/Ticket.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Establecer conexión a la base de datos
        $Tickets = new Ticket();

        //Creamos el array de agregacion de datos
        $datos= array(
          //"Estado_Ticket"=> $_POST['Estado_Ticket'],
          //"Fecha_Creacion"=> $_POST['Fecha_Creacion'];
          "Tema"=> $_POST['Tema'],
          "Mensaje"=> $_POST['Mensaje'],
          //"Usuario"=> $_POST['Usuario'];
          //"Departamento"=> $_POST['Departamento'];
        );

        vardump($datos);
        

        echo "<script>alert('Ticket enviado exitosamente.'); window.location.href = 'usuarioPublico_FormularioTicket.php';</script>";

    } catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = 'usuarioPublico_FormularioTicket.php';</script>";
    }
} else {
    header("Location: usuarioPublico_FormularioTicket.php");
    exit;
}
