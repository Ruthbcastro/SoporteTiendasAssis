<?php 
include("usuarioPublico_Header.php"); 

// Conexión a la base de datos
$conexionDB = new Conexion();
$pdo = $conexionDB->Cone();

$resultados = [];

// Verifica si se envió un parámetro de búsqueda
if (isset($_GET['id_Tickets']) && !empty($_GET['id_Tickets'])) {
    $id_Tickets = $_GET['id_Tickets'];
    try {
        // Consulta preparada para buscar el ticket
        $sql = "SELECT id_Tickets, Numero_Ticket, Estado_Ticket, Fecha_Creacion, Fecha_Lectura, Tema, Mensaje, Ajuntos, Fecha_Cierre, Usuario, id_Tipo_Departamento 
                FROM tickets 
                WHERE id_Tickets LIKE :id_Tickets";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id_Tickets', '%' . $id_Tickets . '%', PDO::PARAM_STR);
        $stmt->execute();
        
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
    }
}
?>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-6 col-lg-8 col-md-10 text-center">
            <h1 class="h3 mb-4 text-gray-800">Buscar Ticket</h1>

            <!-- Formulario de búsqueda -->
            <form class="form-inline justify-content-center" method="GET" action="usuarioPublico_Busqueda.php">
                <div class="input-group" style="width: 100%; max-width: 600px;">
                    <input type="text" 
                           class="form-control bg-gray-200 border-0 small" 
                           style="height: 45px;" 
                           placeholder="Buscar ticket por ID"
                           name="id_Tickets"
                           value="<?php echo isset($_GET['id_Tickets']) ? htmlspecialchars($_GET['id_Tickets']) : ''; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" style="height: 45px;">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Resultados</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Tickets</th>
                            <th>Número de Ticket</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Lectura</th>
                            <th>Tema</th>
                            <th>Mensaje</th>
                            <th>Fecha de Cierre</th>
                            <th>Usuario</th>
                            <th>Departamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($resultados)): ?>
                            <?php foreach ($resultados as $ticket): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($ticket['id_Tickets'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Numero_Ticket'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Estado_Ticket'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Fecha_Creacion'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Fecha_Lectura'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Tema'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Mensaje'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Fecha_Cierre'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['Usuario'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['id_Tipo_Departamento'] ?? ''); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="10" class="text-center">No se encontraron resultados.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
