<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="header-action">
    <h1>Gestión de Activos</h1>
    <a href="index.php?controller=activo&action=crear" class="btn btn-primary">+ Agregar Activo</a>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Símbolo</th>
            <th>Tipo</th>
            <th>Precio Actual ($)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($activos as $a): ?>
        <tr>
            <td><?php echo $a['id']; ?></td>
            <td><strong><?php echo htmlspecialchars($a['nombre']); ?></strong></td>
            <td><code><?php echo htmlspecialchars($a['simbolo']); ?></code></td>
            <td><span class="badge badge-type"><?php echo htmlspecialchars($a['tipo']); ?></span></td>
            <td>$<?php echo number_format($a['precio_actual'], 2); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
