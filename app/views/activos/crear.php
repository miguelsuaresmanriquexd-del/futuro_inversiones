<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-container">
    <h1>Registrar Nuevo Activo</h1>
    <form action="index.php?controller=activo&action=crear" method="POST">
        <div class="form-group">
            <label>Nombre del Activo:</label>
            <input type="text" name="nombre" required placeholder="Ej. Bitcoin, Local 102, Acción Amazon">
        </div>
        <div class="form-group">
            <label>Símbolo / Identificador:</label>
            <input type="text" name="simbolo" required placeholder="Ej. BTC, AMZN">
        </div>
        <div class="form-group">
            <label>Tipo de Activo:</label>
            <select name="tipo">
                <option value="cripto">Criptomoneda</option>
                <option value="activo_comercial">Activo Comercial</option>
                <option value="trading">Trading Online</option>
            </select>
        </div>
        <div class="form-group">
            <label>Precio Actual (USD/COP):</label>
            <input type="number" step="0.01" name="precio_actual" required placeholder="0.00">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Activo</button>
        <a href="index.php?controller=activo&action=index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
