<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="header-action">
    <h1>Portafolios de Inversión</h1>
    <a href="index.php?controller=portafolio&action=crear" class="btn btn-primary">+ Crear Portafolio</a>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Inversionista</th>
            <th>Nombre del Portafolio</th>
            <th>Descripción</th>
            <th>Fecha Creación</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($portafolios as $p): ?>
        <tr>
            <td><?php echo $p['id']; ?></td>
            <td><?php echo htmlspecialchars($p['usuario_nombre']); ?></td>
            <td><strong><?php echo htmlspecialchars($p['nombre']); ?></strong></td>
            <td><?php echo htmlspecialchars($p['descripcion']); ?></td>
            <td><?php echo $p['fecha_creacion']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
