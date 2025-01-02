<?php
ini_set('log_errors', 1); 
error_reporting(E_ALL); 


require_once "Servidor/Ticket.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $ticket = new Ticket();

        $datos = [
            "Tema" => $_POST['Tema'],
            "Mensaje" => $_POST['Mensaje'],
            "Estado_Ticket" => "Creado",
            "Departamento" => $_POST['Departamento'],
            "Usuario" => '1',
            "id_Tipo_Departamento" => $_POST['id_tipos_departamentos'],
            
        ];

        var_dump($datos);

        // Recopilar campos personalizados
       /* $camposPersonalizados = [];
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'campo_') === 0) {
                $camposPersonalizados[] = [
                    'idCampo' => str_replace('campo_', '', $key),
                    'valor' => $value
                ];
            }
        }*/

        //echo "<pre>" . print_r($datos, true) . "</pre>";

        // Insertar ticket


        $resultado = $ticket->AddTicket($datos);

        echo $resultado;
        

        if ($resultado == 1) {
            echo '<script>alert("Inserción exitosa.");</script>';
            echo '<script>setTimeout(function() { window.location.href = "usuarioPublico_NuevoTicket.php"; }, 2000);</script>';
        } else {
            echo '<script>alert("Error: No se pudo crear el ticket.");</script>';
            header("Location: usuarioPublico_FormularioTicket.php");
            die;
        }
        
        
        


    } catch (Exception $e) {
        //echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = 'usuarioPublico_FormularioTicket.php';</script>";
    }
} else {
    //header("Location: usuarioPublico_FormularioTicket.php");
    //exit;
}