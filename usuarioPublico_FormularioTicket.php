<?php
include("usuarioPublico_Header.php");

// Capturar el ID del tipo de departamento desde la URL
$idTipoDepartamento = isset($_GET['id_tipos_departamentos']) ? intval($_GET['id_tipos_departamentos']) : null;

// Establecer conexión a la base de datos
$conexion = (new Conexion())->Cone();

// Obtener campos personalizados del departamento
$query = "SELECT nombre, tipo, opciones, obligatorio 
          FROM campos_personalizados_departamentos 
          JOIN campos_personalizados 
          ON campos_personalizados_departamentos.id_campo_personalizado = campos_personalizados.id
          WHERE id_tipos_departamentos = :id OR id_tipos_departamentos IS NULL";

$stmt = $conexion->prepare($query);
$stmt->bindParam(':id', $idTipoDepartamento, PDO::PARAM_INT);
$stmt->execute();
$campos = $stmt->fetchAll();

?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Crear Nuevo Ticket</h2>
      <p class="lead">Formulario de reporte para el departamento seleccionado.</p>
    </div>

    <div class="col-md-8 mx-auto">
      <h4 class="mb-3">Detalles del Ticket</h4>
      <form class="needs-validation" method="POST" action="procesar_ticket.php" novalidate>
        <!-- Campos fijos comunes para todos los tickets -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
          <div class="invalid-feedback">Tu nombre es requerido.</div>
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email" class="form-control" id="correo" name="correo" placeholder="you@example.com" required>
          <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
        </div>

        <div class="mb-3">
          <label for="confirmar_correo" class="form-label">Confirmar Correo</label>
          <input type="email" class="form-control" id="confirmar_correo" name="confirmar_correo" placeholder="Confirma tu correo" required>
          <div class="invalid-feedback">Por favor, confirma tu correo.</div>
        </div>

        <div class="mb-3">
          <label for="departamento" class="form-label">Departamento</label>
          <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Tu departamento" required>
          <div class="invalid-feedback">Por favor, indica tu departamento.</div>
        </div>

        <!-- Renderizar campos personalizados -->
        <?php if (!empty($campos)): ?>
          <?php foreach ($campos as $campo): ?>
            <div class="mb-3">
              <label class="form-label"><?php echo htmlspecialchars($campo['nombre']); ?></label>
              <?php if ($campo['tipo'] === 'Botón de opción'): ?>
                <!-- Botones de opción -->
                <?php $opciones = explode(',', $campo['opciones']); ?>
                <?php foreach ($opciones as $opcion): ?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo strtolower(str_replace(' ', '_', $campo['nombre'])); ?>" value="<?php echo htmlspecialchars($opcion); ?>" required>
                    <label class="form-check-label"><?php echo htmlspecialchars($opcion); ?></label>
                  </div>
                <?php endforeach; ?>
              <?php elseif ($campo['tipo'] === 'Caja de selección'): ?>
                <!-- Caja de selección -->
                <?php $opciones = explode(',', $campo['opciones']); ?>
                <select class="form-select" name="<?php echo strtolower(str_replace(' ', '_', $campo['nombre'])); ?>" required>
                  <option value="">Selecciona...</option>
                  <?php foreach ($opciones as $opcion): ?>
                    <option value="<?php echo htmlspecialchars($opcion); ?>"><?php echo htmlspecialchars($opcion); ?></option>
                  <?php endforeach; ?>
                </select>
              <?php elseif ($campo['tipo'] === 'Fecha'): ?>
                <!-- Campo de Fecha -->
                <input type="date" class="form-control" name="<?php echo strtolower(str_replace(' ', '_', $campo['nombre'])); ?>" required>
              <?php else: ?>
                <!-- Campos de texto genéricos -->
                <input type="text" class="form-control" name="<?php echo strtolower(str_replace(' ', '_', $campo['nombre'])); ?>" placeholder="<?php echo htmlspecialchars($campo['nombre']); ?>" required>
              <?php endif; ?>
              <div class="invalid-feedback">Por favor, completa este campo.</div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p>No hay campos personalizados disponibles para este departamento.</p>
        <?php endif; ?>

        <!-- Botón Enviar -->
        <hr class="my-4">
        <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Ticket</button>
      </form>
    </div>
  </main>
</div>

<?php include("footer.php"); ?>
