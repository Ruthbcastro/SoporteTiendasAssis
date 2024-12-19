<?php include("gerenteDeTienda_Header.php"); ?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Crear Nuevo Ticket</h2>
      <p class="lead">Creación de un nuevo ticket para el reporte de incidencias de dicho departamento</p>
    </div>

    <div class="">
      
      <div class="md-7 mb-7 lg-8">
        <h4 class="mb-3">Ticket del departamento</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <!---  <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div> --->


            
            </div>

        <!---

            <div class="col-12 mb-3">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>
            --->

            <div class="col-md-5">

              <label for="country" class="form-label">Prioridad</label>
              <div class="dropdown mb-4">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Prioridad
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Alta</a>
                                            <a class="dropdown-item" href="#">Media</a>
                                            <a class="dropdown-item" href="#">Baja</a>
                                        </div>
                                    </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Sucursal</label>
              <div class="dropdown ">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Sucursal
                                        </button>
                                        <div class="dropdown-menu animated--fade-in"
                                            aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Campeche</a>
                                            <a class="dropdown-item" href="#">Kabá</a>
                                            <a class="dropdown-item" href="#">Norte</a>
                                            <a class="dropdown-item" href="#">Deco</a>
                                            <a class="dropdown-item" href="#">IT</a>
                                            <a class="dropdown-item" href="#">Mercadotecnia</a>
                                            <a class="dropdown-item" href="#">Cancún</a>
                                            <a class="dropdown-item" href="#">Administración</a>
                                            <a class="dropdown-item" href="#">Norte</a>
                                        </div>
                                    </div>

            </div>

            
          </div>


          <label for="email" class="form-label">Tipo de incidencia: </label>

          <div class="mb-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Intelisis</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Telcel</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">Otro (describa el tema)</label>
            </div>
          </div>
<!---
          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
          --->

          

          <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Tema:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<hr class="my-4 mb-3">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar ticket</button>
        </form>

      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://getbootstrap.com/docs/5.0/examples/checkout/#">Privacy</a></li>
      <li class="list-inline-item"><a href="https://getbootstrap.com/docs/5.0/examples/checkout/#">Terms</a></li>
      <li class="list-inline-item"><a href="https://getbootstrap.com/docs/5.0/examples/checkout/#">Support</a></li>
    </ul>
  </footer>
</div>


<?php include("footer.php");?>