<?php include("usuarioPublico_Header.php"); 

$usuario = "RUTHBETZABE";
$password= "RUTH123";



?>








<div class="container-fluid">


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuario Público</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Crear Nuevo Ticket</a>
</div>

<div class="row">


<div class="col-xl-6 col-md-5 mb-6">
    <a href="usuarioPublico_MisTickets.php"  class="card border-left-primary shadow h-100 py-2 btn btn-link text-left w-100" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">Buscar ticket</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-folder-open fa-2x text-gray-300 me-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>



<div class="col-xl-6 col-md-5 mb-6">
    <a href="usuarioPublico_NuevoTicket.php" class="card border-left-success shadow h-100 py-2 btn btn-link text-left w-100" >
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-success text-uppercase mb-1">
                        Crear nuevo ticket
                    

                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fa fa-plus fa-2x text-gray-300 me-2"></i>
                </div>
            </div>
        </div>
    </a>
</div>



<!--- <div class="col-xl-3 col-md-6 mb-4">
    <button class="card border-left-info shadow h-100 y-2 btn btn-link text-left w-100" onclick="alert('¡Card clickeada!')">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-info text-uppercase mb-1">
                        Plantillas</div>
                   <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        
                         </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div> 
                        </div> 
                    </div> 
                    </div>
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                </div>        
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300 "></i>
                </div>
            </div>
        </div>
    </button>
</div>



<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 font-weight-bold text-warning text-uppercase mb-1">
                        Replicas</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


---->
</div>

<?php include("footer.php");?>