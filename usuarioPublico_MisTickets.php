<?php include("usuarioPublico_Header.php"); 
?>

<!-- Contenedor principal -->
<div class="container-fluid">
    <!-- Título centrado arriba -->
    <div class="row">
        <div class="col-12 text-center mt-4">
            <h1 class="h3 font-weight-bold text-primary">Buscar Ticket</h1>
        </div>
    </div>
    

    <!-- Buscadores centrados vertical y horizontalmente -->
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-xl-6 col-lg-8 col-md-10 text-center">
            <!-- Búsqueda por ID -->
            <div class="mb-4">
                <label for="buscarID" class="mb-2 font-weight-bold">Buscar por ID del Ticket</label>
                <form class="form-inline justify-content-center" method="GET" action="usuarioPublico_BusquedaPorId.php">
                    <div class="input-group" style="width: 100%; max-width: 700px;">
                        <input type="text" 
                               id="buscarID"
                               class="form-control bg-gray-200 border-0 small" 
                               style="height: 45px;" 
                               placeholder="Buscar ticket por ID"
                               name="id_Tickets"
                               value="<?php echo isset($_GET['id_Tickets']) ? htmlspecialchars($_GET['id_Tickets']) : ''; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="buscar_id" style="height: 45px;">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Búsqueda por Correo -->
            <div>
                <label for="buscarCorreo" class="mb-2 font-weight-bold">Buscar por Correo Electrónico</label>
                <form class="form-inline justify-content-center" method="GET" action="usuarioPublico_BusquedaPorCorreo.php">
                    <div class="input-group" style="width: 100%; max-width: 700px;">
                        <input type="email" 
                               id="buscarCorreo"
                               class="form-control bg-gray-200 border-0 small" 
                               style="height: 45px;" 
                               placeholder="Buscar ticket por correo"
                               name="Correo"
                               value="<?php echo isset($_GET['Correo']) ? htmlspecialchars($_GET['Correo']) : ''; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" name="buscar_correo" style="height: 45px;">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>
