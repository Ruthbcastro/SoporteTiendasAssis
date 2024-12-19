<?php include("usuarioNormal_Header.php"); ?>

<?php
require_once('Servidor/Conexion.php');

$Datos = new Conexion();
$Valores = $Datos->Departamentos();

?>

<div class="container-fluid">


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Crear Nuevo Ticket</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Crear Nuevo Ticket</a>
</div>
<!---
<div class="row">


<div class="col-xl-3 col-md-6 mb-4">
    <a href="formularioTicket.php"  class="card border-left-primary shadow h-100 py-2 btn btn-link text-left w-100 " >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class=" font-weight-bold text-primary text-uppercase mb-1">
                       
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-folder-open fa-2x text-gray-300 me-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>



<div class="col-xl-3 col-md-6 mb-4">
    <a href="/nuevoTicket.php" class="card border-left-success shadow h-100 py-2 btn btn-link text-left w-100" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-success text-uppercase mb-1">
                        Incidencias de Mantto (Muebles e Inmuebles)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fa fa-plus fa-2x text-gray-300 me-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-warning text-uppercase mb-1">
                        Incidencias de Compras (Telas y Grales.)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-warning text-uppercase mb-1">
                        Incidencias Flotillas</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-xl-3 col-md-6 mb-4">
    <a href="/nuevoTicket.php"  class="card border-left-secondary shadow h-100 py-2 btn btn-link text-left w-100" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-secondary text-uppercase mb-1">Incidencias de Infraestructura</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-folder-open fa-2x text-gray-300 me-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>



<div class="col-xl-3 col-md-6 mb-4">
    <a href="/nuevoTicket.php" class="card border-left-danger shadow h-100 py-2 btn btn-link text-left w-100" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-danger text-uppercase mb-1">
                        Incidencias de Capital Humano</div>
                    <div class="mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fa fa-plus fa-2x text-gray-300 me-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-dark shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-dark text-uppercase mb-1">
                        Incidencias de Compras (Ropas y Mercería)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-primary text-uppercase mb-1">
                        Expresate colaborador</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-warning text-uppercase mb-1">
                        Logística y transporte</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

--->

<div class="row">
    <?php foreach ($Valores as $Val): ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="usuarioNormal_FormularioTicket.php" class="card border-left-danger shadow h-100 py-2 btn btn-link text-left w-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-danger text-uppercase mb-1">
                                <?php echo htmlspecialchars($Val['Departamento']); // Muestra el departamento ?>
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder-open fa-2x text-gray-300 me-2"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>


</div>


<?php include("footer.php");?>