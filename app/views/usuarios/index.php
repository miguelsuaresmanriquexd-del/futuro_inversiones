<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="header-action">
    <h1>Listado de Usuarios</h1>
    <a href="index.php?controller=usuario&action=crear" class="btn btn-primary">+ Nuevo Usuario</a>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Rol</th>
            <th>Fecha Registro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?php echo $u['id']; ?></td>
            <td><?php echo htmlspecialchars($u['nombre']); ?></td>
            <td><?php echo htmlspecialchars($u['correo']); ?></td>
            <td><span class="badge"><?php echo htmlspecialchars($u['rol']); ?></span></td>
            <td><?php echo $u['fecha_registro']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
