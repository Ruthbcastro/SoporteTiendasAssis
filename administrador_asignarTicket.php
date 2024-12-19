<?php include("header.php"); ?>


               <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Asignar Ticket a un Usuario</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Mi ticket</h6>
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
                                        </tr>
                                    </thead>
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
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row card shadow mb-4  ">
                        <div class="card-header py-3">
                            <label class=" ">Buscar usuario:</label>
                        
                         <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary   my-2 my-sm-0" type="submit">Search</button>
                      </form>
                      <a href="#" class="btn btn-success btn-icon-split mt-3 ">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Asignar </span>
                                    </a>
                        </div>
                    </div>
                    

                </div>
                        
                    </label>
                   
                <!-- /.container-fluid -->


<?php include("footer.php");?>

