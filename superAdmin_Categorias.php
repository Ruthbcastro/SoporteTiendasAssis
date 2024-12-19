<?php include("superAdmin_header.php"); ?>




               <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Categorías</h1>
                   <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                        <a href="#" class="btn btn-primary btn-icon-split mb-3 mr-3">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Generar nueva categoría</span>
                                    </a>
                        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre de la categoría</th>
                                            <th>Prioridad:</th>
                                            <th>Tickets:</th>
                                            <th>Estado:</th>
                                            <th>Autoasignar:</th>
                                            <th></th>
                                            
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre de la categoría</th>
                                            <th>Prioridad:</th>
                                            <th>Tickets:</th>
                                            <th>Estado:</th>
                                            <th>Autoasignar::</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Incidencias de sistemas</td>
                                            <td> 
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Prioridad
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Baja</a>
                                                        <a class="dropdown-item" href="#">Media</a>
                                                        <a class="dropdown-item" href="#">Alta</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="replica.php" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Tickets
                            
                                        
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Estado
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Privado</a>
                                                        <a class="dropdown-item" href="#">Público</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch mt-3">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Autoasignar</label>
                                                    </div>
                                            </td>
                                          
                                            
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn ml-3">
                                                <span class="text">Generar enlace directo</span>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle mt-3">
                                                <i class="fas fa-trash"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-up"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-down"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Incidencias de sistemas</td>
                                            <td> 
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Prioridad
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Baja</a>
                                                        <a class="dropdown-item" href="#">Media</a>
                                                        <a class="dropdown-item" href="#">Alta</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="replica.php" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Tickets
                            
                                        
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Estado
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Privado</a>
                                                        <a class="dropdown-item" href="#">Público</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch mt-3">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Autoasignar</label>
                                                    </div>
                                            </td>
                                          
                                            
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn ml-3">
                                                <span class="text">Generar enlace directo</span>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle mt-3">
                                                <i class="fas fa-trash"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-up"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-down"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Incidencias de sistemas</td>
                                            <td> 
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Prioridad
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Baja</a>
                                                        <a class="dropdown-item" href="#">Media</a>
                                                        <a class="dropdown-item" href="#">Alta</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="replica.php" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Tickets
                            
                                        
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Estado
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Privado</a>
                                                        <a class="dropdown-item" href="#">Público</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch mt-3">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Autoasignar</label>
                                                    </div>
                                            </td>
                                          
                                            
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn ml-3">
                                                <span class="text">Generar enlace directo</span>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle mt-3">
                                                <i class="fas fa-trash"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-up"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-down"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Incidencias de sistemas</td>
                                            <td> 
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Prioridad
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Baja</a>
                                                        <a class="dropdown-item" href="#">Media</a>
                                                        <a class="dropdown-item" href="#">Alta</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="replica.php" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Tickets
                            
                                        
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Estado
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Privado</a>
                                                        <a class="dropdown-item" href="#">Público</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch mt-3">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Autoasignar</label>
                                                    </div>
                                            </td>
                                          
                                            
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn ml-3">
                                                <span class="text">Generar enlace directo</span>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle mt-3">
                                                <i class="fas fa-trash"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-up"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-down"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Incidencias de sistemas</td>
                                            <td> 
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Prioridad
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Baja</a>
                                                        <a class="dropdown-item" href="#">Media</a>
                                                        <a class="dropdown-item" href="#">Alta</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="replica.php" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Tickets
                            
                                        
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Estado
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Privado</a>
                                                        <a class="dropdown-item" href="#">Público</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch mt-3">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Autoasignar</label>
                                                    </div>
                                            </td>
                                          
                                            
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn ml-3">
                                                <span class="text">Generar enlace directo</span>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle mt-3">
                                                <i class="fas fa-trash"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-up"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-down"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Incidencias de sistemas</td>
                                            <td> 
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Prioridad
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Baja</a>
                                                        <a class="dropdown-item" href="#">Media</a>
                                                        <a class="dropdown-item" href="#">Alta</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="replica.php" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                    Tickets
                            
                                        
                                            </td>
                                            <td>
                                                <div class="dropdown mb-4 ">
                                                    <button class="btn btn-secondary dropdown-toggle ml-3" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Estado
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="#">Privado</a>
                                                        <a class="dropdown-item" href="#">Público</a>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check form-switch mt-3">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Autoasignar</label>
                                                    </div>
                                            </td>
                                          
                                            
                                            <td><a href="replica.php" class="btn btn-primary btn-icon-split btn ml-3">
                                                <span class="text">Generar enlace directo</span>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-circle mt-3">
                                                <i class="fas fa-trash"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-up"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-circle mt-3">
                                                    <i class="fas fa-arrow-down"></i>
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

