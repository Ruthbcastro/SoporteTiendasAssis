<?php 
include("usuarioPublico_Header.php"); 

// Capturar el ID del tipo de departamento desde la URL
$idTipoDepartamento = isset($_GET['id_tipos_departamentos']) ? $_GET['id_tipos_departamentos'] : null;

// Mapa de tipos de incidencia y campos específicos
$incidencias = [
    1 => ['titulo' => 'Sistemas', 'campos' => ['Equipo Afectado', 'Descripción del Problema']],
    2 => ['titulo' => 'Recursos Humanos', 'campos' => ['Nombre del Empleado', 'Asunto']],
    3 => ['titulo' => 'Tráfico', 'campos' => ['Vehículo', 'Detalle del Incidente']],
    4 => ['titulo' => 'Mantenimiento', 'campos' => ['Área Afectada', 'Detalles']],
    5 => ['titulo' => 'Otro', 'campos' => ['Descripción General']],
];

// Determinar si el tipo de incidencia es válido
$tipoIncidencia = $incidencias[$idTipoDepartamento] ?? ['titulo' => 'General', 'campos' => ['Descripción']];

?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Crear Nuevo Ticket</h2>
      <p class="lead">Formulario de reporte para el departamento de <strong><?php echo htmlspecialchars($tipoIncidencia['titulo']); ?></strong></p>
    </div>

    <div class="col-md-8 mx-auto">
      <h4 class="mb-3">Detalles del Ticket</h4>
      <form class="needs-validation" method="POST" action="procesar_ticket.php" novalidate>
        <!-- Campo Nombre -->
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
          <div class="invalid-feedback">Tu nombre es requerido.</div>
        </div>

        <!-- Campo Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
          <div class="invalid-feedback">Por favor, ingresa un correo válido.</div>
        </div>

        <!-- Prioridad -->
        <div class="mb-3">
          <label for="prioridad" class="form-label">Prioridad</label>
          <select class="form-select" id="prioridad" name="prioridad" required>
            <option value="">Selecciona...</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
          </select>
          <div class="invalid-feedback">Por favor, selecciona una prioridad.</div>
        </div>

        <!-- Campos Dinámicos -->
        <?php foreach ($tipoIncidencia['campos'] as $campo): ?>
          <div class="mb-3">
            <label class="form-label"><?php echo htmlspecialchars($campo); ?></label>
            <input type="text" class="form-control" name="<?php echo strtolower(str_replace(' ', '_', $campo)); ?>" placeholder="<?php echo $campo; ?>" required>
            <div class="invalid-feedback">Por favor, completa este campo.</div>
          </div>
        <?php endforeach; ?>

        <!-- Botón Enviar -->
        <hr class="my-4">
        <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Ticket</button>
      </form>
    </div>
  </main>
</div>

<?php include("footer.php"); ?>
