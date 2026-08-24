<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-container">
    <h1>Registrar Transacción</h1>
    <form action="index.php?controller=transaccion&action=crear" method="POST">
        <div class="form-group">
            <label>Portafolio:</label>
            <select name="portafolio_id">
                <?php foreach ($portafolios as $p): ?>
                    <option value="<?php echo $p['id']; ?>"><?php echo htmlspecialchars($p['nombre']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Activo:</label>
            <select name="activo_id">
                <?php foreach ($activos as $a): ?>
                    <option value="<?php echo $a['id']; ?>"><?php echo htmlspecialchars($a['nombre']); ?> (<?php echo $a['simbolo']; ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de Operación:</label>
            <select name="tipo_transaccion">
                <option value="compra">Compra</option>
                <option value="venta">Venta</option>
            </select>
        </div>
        <div class="form-group">
            <label>Cantidad:</label>
            <input type="number" step="0.0001" name="cantidad" required placeholder="0.00">
        </div>
        <div class="form-group">
            <label>Precio Unitario ($):</label>
            <input type="number" step="0.01" name="precio_unitario" required placeholder="0.00">
        </div>
        <button type="submit" class="btn btn-primary">Registrar Operación</button>
        <a href="index.php?controller=transaccion&action=index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
