<?php 
include("usuarioPublico_Header.php");

// Conexión a la base de datos
$conexionDB = new Conexion();
$pdo = $conexionDB->Cone();

$resultados = [];

// Verifica si el formulario de búsqueda por correo fue enviado
if (isset($_GET['buscar_correo']) && isset($_GET['Correo']) && !empty($_GET['Correo'])) {
    $correo = $_GET['Correo'];

    // Validar que el formato del correo sea válido
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        try {
            // 1. Buscar el ID del usuario usando el correo en la tabla usuarios
            $sqlUsuario = "SELECT id_Usuario FROM usuarios WHERE Correo = :correo";
            $stmtUsuario = $pdo->prepare($sqlUsuario);
            $stmtUsuario->bindValue(':correo', $correo, PDO::PARAM_STR);
            $stmtUsuario->execute();

            $usuario = $stmtUsuario->fetch(PDO::FETCH_ASSOC);

            if ($usuario) {
                $idUsuario = $usuario['id_Usuario'];

                // 2. Buscar todos los tickets del usuario usando su ID
                $sqlTickets = "SELECT id_Tickets, Numero_Ticket, Estado_Ticket, Fecha_Creacion, Fecha_Lectura, Tema, Mensaje, Ajuntos, Fecha_Cierre, id_Tipo_Departamento 
                               FROM tickets 
                               WHERE Usuario = :idUsuario";
                $stmtTickets = $pdo->prepare($sqlTickets);
                $stmtTickets->bindValue(':idUsuario', $idUsuario, PDO::PARAM_INT);
                $stmtTickets->execute();

                $resultados = $stmtTickets->fetchAll(PDO::FETCH_ASSOC);
            } else {
                echo "<div class='text-danger text-center'>No se encontró un usuario con ese correo.</div>";
            }
        } catch (PDOException $e) {
            echo "<div class='text-danger text-center'>Error en la consulta: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='text-danger text-center'>Por favor, ingrese un correo válido.</div>";
    }
}
?>

<!-- Formulario de búsqueda por correo -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="h3 mb-4 text-center text-primary font-weight-bold">Buscar Tickets por Correo</h1>
            <form method="GET" action="usuarioPublico_BusquedaPorCorreo.php">
                <div class="input-group mb-3" style="max-width: 700px; margin: 0 auto;">
                    <input type="email" 
                           class="form-control bg-gray-200 border-0 small" 
                           placeholder="Ingrese el correo del usuario" 
                           name="Correo"
                           value="<?php echo isset($_GET['Correo']) ? htmlspecialchars($_GET['Correo']) : ''; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="buscar_correo">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Resultados de la búsqueda -->
<div class="container mt-4">
    <?php if (!empty($resultados)): ?>
        <div class="card shadow">
            <div class="card-body">
                <h5 class="text-primary mb-3">Resultados encontrados</h5>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID Tickets</th>
                                <th>Número de Ticket</th>
                                <th>Estado</th>
                                <th>Fecha de Creación</th>
                                <th>Fecha de Lectura</th>
                                <th>Tema</th>
                                <th>Mensaje</th>
                                <th>Adjuntos</th>
                                <th>Fecha de Cierre</th>
                                <th>Departamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultados as $ticket): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($ticket['id_Tickets'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Numero_Ticket'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Estado_Ticket'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Fecha_Creacion'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Fecha_Lectura'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Tema'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Mensaje'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Adjuntos'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Fecha_Cierre'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['id_Tipo_Departamento'] ?? ''); ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center text-danger mt-3">
            No se encontraron tickets asociados a este correo.
        </div>
    <?php endif; ?>
</div>

<?php include("footer.php"); ?>
