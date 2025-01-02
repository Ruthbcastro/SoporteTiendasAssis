<?php
include("usuarioPublico_Header.php");
require_once 'Servidor/Conexion.php'; // Incluye la conexión a la base de datos

// Capturar el ID del tipo de departamento desde la URL
$idTipoDepartamento = isset($_GET['id_tipos_departamentos']) ? intval($_GET['id_tipos_departamentos']) : null;

// Validar que el ID del departamento sea válido
if ($idTipoDepartamento === null) {
    echo "<script>alert('ID del tipo de departamento no válido.'); window.location.href = 'usuarioPublico_FormularioTicket.php';</script>";
    exit;
}

$Datos = new Conexion();
$Valores = $Datos->Users();

foreach ($Valores as $Val){
  $Usuario = $Val['Nombre'];
  $IDUsuario = $Val['id_Usuario'];
  $Departamento = $Val['Departamento'];
}


// Establecer conexión a la base de datos
$conexion = (new Conexion())->Cone();

// Obtener campos personalizados del departamento
$query = "SELECT cp.id AS id_campo, cp.nombre, cp.tipo, cp.opciones, cp.tamaño, cp.visibilidad, cp.obligatorio 
          FROM campos_personalizados_departamentos cpd
          JOIN campos_personalizados cp ON cpd.id_campo_personalizado = cp.id
          WHERE cpd.id_tipos_departamentos = :id OR cpd.id_tipos_departamentos IS NULL";

$stmt = $conexion->prepare($query);
$stmt->bindParam(':id', $idTipoDepartamento, PDO::PARAM_INT);
$stmt->execute();
$campos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h1>Hola Bienvenida <?php echo $Usuario;?></h1>
      <h2>Con el numero de usuario <?php echo $IDUsuario;?></h2>
      <p><?php echo $idTipoDepartamento;?></p>
      
      <h2>Crear Nuevo Ticket</h2>
      <p class="lead">Formulario de reporte para el departamento seleccionado.</p>
    </div>

    <div class="col-md-8 mx-auto">
      <h4 class="mb-3">Detalles del Ticket</h4>
      <form class="needs-validation" method="POST" action="usuarioPublico_ProcesarTicket.php" enctype="multipart/form-data" novalidate>
        <input type="hidden" name="id_tipos_departamentos" value="<?php echo htmlspecialchars($idTipoDepartamento); ?>">

        <!-- Campos fijos comunes para todos los tickets -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Tu nombre" required>
          <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Tu usuario"  value = <?php echo $IDUsuario ;?> hidden >
          <div class="invalid-feedback">Tu nombre es requerido.</div>
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" class="form-control" id="Correo" name="Correo" placeholder="you@example.com" required>
          <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
        </div>

        <div class="mb-3">
          <label for="confirmar_correo" class="form-label">Confirmar Correo</label>
          <input type="email" class="form-control" id="Confirmar_Correo" name="Confirmar_Correo" placeholder="Confirma tu correo" required>
          <div class="invalid-feedback">Por favor, confirma tu correo.</div>
        </div>

        <div class="mb-3">
          <label for="departamento" class="form-label">Departamento</label>
          <input type="text" class="form-control" id="Departamento" name="Departamento" placeholder="Tu departamento" value=<?php echo $Departamento;?>  required>
          <div class="invalid-feedback">Por favor, indica tu departamento.</div>
        </div>

        <!-- Renderizar campos personalizados -->
        <?php foreach ($campos as $campo): ?>
          <?php if ($campo['visibilidad'] === 'oculto') continue; ?>
          <div class="mb-3">
            <label class="form-label"><?php echo htmlspecialchars($campo['nombre']); ?></label>
            <?php if ($campo['tipo'] === 'Botón de opción'): ?>
              <?php $opciones = json_decode($campo['opciones'], true); ?>
              <?php foreach ($opciones as $opcion): ?>
                <div class="form-check">
                  <input class="form-check-input" 
                         type="radio" 
                         name="campo_<?php echo htmlspecialchars($campo['id_campo']); ?>" 
                         value="<?php echo htmlspecialchars($opcion); ?>" 
                         <?php echo $campo['obligatorio'] ? 'required' : ''; ?>>
                  <label class="form-check-label"><?php echo htmlspecialchars($opcion); ?></label>
                </div>
              <?php endforeach; ?>
            <?php elseif ($campo['tipo'] === 'Caja de selección'): ?>
              <?php $opciones = json_decode($campo['opciones'], true); ?>
              <select class="form-select" 
                      name="campo_<?php echo htmlspecialchars($campo['id_campo']); ?>" 
                      <?php echo $campo['obligatorio'] ? 'required' : ''; ?>>
                <option value="">Selecciona...</option>
                <?php foreach ($opciones as $opcion): ?>
                  <option value="<?php echo htmlspecialchars($opcion); ?>"><?php echo htmlspecialchars($opcion); ?></option>
                <?php endforeach; ?>
              </select>
            <?php elseif ($campo['tipo'] === 'Fecha'): ?>
              <input type="date" 
                     class="form-control" 
                     name="campo_<?php echo htmlspecialchars($campo['id_campo']); ?>" 
                     <?php echo $campo['obligatorio'] ? 'required' : ''; ?>>
            <?php else: ?>
              <input type="text" 
                     class="form-control" 
                     name="campo_<?php echo htmlspecialchars($campo['id_campo']); ?>" 
                     placeholder="<?php echo htmlspecialchars($campo['nombre']); ?>" 
                     <?php echo $campo['obligatorio'] ? 'required' : ''; ?>>
            <?php endif; ?>
            <div class="invalid-feedback">Por favor, completa este campo.</div>
          </div>
        <?php endforeach; ?>

        <!-- Campos adicionales: Tema, Mensaje, Adjuntos -->
        <div class="mb-3">
          <label for="tema" class="form-label">Tema</label>
          <input type="text" class="form-control" id="Tema" name="Tema" placeholder="Tema del ticket" required>
          <div class="invalid-feedback">Por favor, ingresa un tema.</div>
        </div>

        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="Mensaje" name="Mensaje" rows="4" placeholder="Describe el problema" required></textarea>
          <div class="invalid-feedback">Por favor, ingresa un mensaje.</div>
        </div>

        <div class="mb-3">
          <label for="adjuntos" class="form-label">Adjuntos</label>
          <input type="file" class="form-control" id="adjuntos" name="adjuntos[]" multiple>
        </div>

        <!-- Botón Enviar -->
        <hr class="my-4">
        <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Ticket</button>
      </form>
    </div>
  </main>
</div>

<script>
  (function () {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    const correo = document.getElementById('correo');
    const confirmarCorreo = document.getElementById('confirmar_correo');

    Array.from(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        if (correo.value !== confirmarCorreo.value) {
          event.preventDefault();
          alert('Los correos no coinciden.');
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>

<?php include("footer.php"); ?>
