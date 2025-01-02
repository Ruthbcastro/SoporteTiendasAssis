<?php include("usuarioPublico_Header.php"); ?>

<?php

$Valores = $Datos->Departamentos();

?>

<div class="container-fluid">


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Crear Nuevo Ticket</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Crear Nuevo Ticket</a>
</div>


<div class="row">
    <?php if (!empty($Valores)): ?>
        <?php foreach ($Valores as $Val): ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="usuarioPublico_FormularioTicket.php?id_tipos_departamentos=<?php echo urlencode($Val['id_tipos_departamentos']); ?>" class="card border-left-danger shadow h-100 py-2 btn btn-link text-left w-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="font-weight-bold text-danger text-uppercase mb-1">
                                    <?php echo htmlspecialchars($Val['nombre_departamento']); // Muestra el nombre del departamento ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-folder-open fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay departamentos disponibles.</p>
    <?php endif; ?>
</div>



</div>


<?php include("footer.php");?>