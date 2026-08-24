<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="header-action">
    <h1>Historial de Transacciones</h1>
    <a href="index.php?controller=transaccion&action=crear" class="btn btn-primary">+ Nueva Transacción</a>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Portafolio</th>
            <th>Activo</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Total ($)</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transacciones as $t): ?>
        <tr>
            <td><?php echo $t['id']; ?></td>
            <td><?php echo htmlspecialchars($t['portafolio_nombre']); ?></td>
            <td><?php echo htmlspecialchars($t['activo_nombre']); ?> (<code><?php echo htmlspecialchars($t['simbolo']); ?></code>)</td>
            <td><span class="badge <?php echo $t['tipo_transaccion'] === 'compra' ? 'badge-buy' : 'badge-sell'; ?>"><?php echo strtoupper($t['tipo_transaccion']); ?></span></td>
            <td><?php echo $t['cantidad']; ?></td>
            <td>$<?php echo number_format($t['precio_unitario'], 2); ?></td>
            <td><strong>$<?php echo number_format($t['total'], 2); ?></strong></td>
            <td><?php echo $t['fecha_transaccion']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
