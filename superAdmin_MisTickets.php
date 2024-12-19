<?php include("superAdmin_header.php"); ?>


               <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Mis tickets</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                                    <div>
                                        <div class="small mb-1">Seleccionar filtros de búsqueda:</div>
                                        
                                    <div class="dropdown mb-4 ">
                                        <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Por prioridad
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Estatus
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                         <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Departamento
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> 

                                    </div>


                                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="#" class="btn btn-primary btn-icon-split mb-3 mr-3">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Tickets Asignados</span>
                                    </a>
                        <a href="#" class="btn btn-primary btn-icon-split mb-3">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Mis tickets</span>
                                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id de segumiento:</th>
                                            <th>Actualizar:</th>
                                            <th>Categoria:</th>
                                            <th>Nombre:</th>
                                            <th>Tema:</th>
                                            <th>Estado:</th>
                                             <th>Ultima respuesta:</th>
                                            <th>Tiempo dedicado:</th>
                                            <th>Sucursal:</th>
                                            <th>Prioridad:</th>
                                            <th>Generar réplica:</th>
                                            <th>Asignar a:</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Id de segumiento:</th>
                                            <th>Actualizar:</th>
                                            <th>Categoria:</th>
                                            <th>Nombre:</th>
                                            <th>Tema:</th>
                                            <th>Estado:</th>
                                             <th>Ultima respuesta:</th>
                                            <th>Tiempo dedicado:</th>
                                            <th>Sucursal:</th>
                                            <th>Prioridad:</th>
                                            <th>Generar réplica:</th>
                                            <th>Asignar a:</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>6SE-Y79-1V3J</td>
                                            <td>15 Jun 24</td>
                                            <td>Incidencia Mantto (Muebles e inmuebles)</td>
                                            <td>Sabina Espinosa</td>
                                            <td>Puertas de entrada</td>
                                            <td>Nuevo</td>
                                            <td>Sabina Espinosa</td>
                                            <td>0:00:00</td>
                                            <td>UNE Centro</td>
                                            <td>Alto</td>
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                    <span class="text">Generar réplica</span>
                                                </a>
                                            </td>
                                            <td><a href="administrador_asignarTicket.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                <span class="text">Asignar ticket</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                             <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td><a href="#" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                <span class="text">Generar réplica</span>
                                                </a>
                                            </td>
                                            <td><a href="administrador_asignarTicket.php.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                 <span class="text">Asignar ticket</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td><a href="#" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                <span class="text">Generar réplica</span>
                                                </a>
                                            </td>
                                            <td><a href="administrador_asignarTicket.php.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                 <span class="text">Asignar ticket</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                           <td><a href="#" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                <span class="text">Generar réplica</span>
                                                </a>
                                            </td>
                                            <td><a href="administrador_asignarTicket.php.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                 <span class="text">Asignar ticket</span>
                                                </a>
                                            </td>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td><a href="#" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                <span class="text">Generar réplica</span>
                                                </a>
                                            </td>
                                            <td><a href="administrador_asignarTicket.php.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                 <span class="text">Asignar ticket</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td><a href="#" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                <span class="text">Generar réplica</span>
                                                </a>
                                            </td>
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn-sm mt-3">
                                                 <span class="text">Asignar ticket</span>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


<?php include("footer.php");?>

