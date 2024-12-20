<?php
include("usuarioPublico_Header.php");
//require_once 'Servidor/Conexion.php'; // Incluye la conexión a la base de datos

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
        <!-- Renderizar campos personalizados -->
        <?php if (!empty($campos)): ?>
          <?php foreach ($campos as $campo): ?>
            <div class="mb-3">
              <label class="form-label"><?php echo htmlspecialchars($campo['nombre']); ?></label>
              <?php if ($campo['tipo'] === 'Botón de opción'): ?>
                <!-- Botones de opción -->
                <?php $opciones = json_decode($campo['opciones'], true); ?>
                <?php foreach ($opciones as $opcion): ?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="<?php echo strtolower(str_replace(' ', '_', $campo['nombre'])); ?>" value="<?php echo htmlspecialchars($opcion); ?>" required>
                    <label class="form-check-label"><?php echo htmlspecialchars($opcion); ?></label>
                  </div>
                <?php endforeach; ?>
              <?php elseif ($campo['tipo'] === 'Caja de selección'): ?>
                <!-- Caja de selección -->
                <?php $opciones = json_decode($campo['opciones'], true); ?>
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
