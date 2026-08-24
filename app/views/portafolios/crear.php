<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-container">
    <h1>Crear Portafolio</h1>
    <form action="index.php?controller=portafolio&action=crear" method="POST">
        <div class="form-group">
            <label>Usuario Propietario:</label>
            <select name="usuario_id">
                <?php foreach ($usuarios as $u): ?>
                    <option value="<?php echo $u['id']; ?>"><?php echo htmlspecialchars($u['nombre']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nombre del Portafolio:</label>
            <input type="text" name="nombre" required placeholder="Ej. Mi Portafolio Cripto">
        </div>
        <div class="form-group">
            <label>Descripción:</label>
            <textarea name="descripcion" rows="3" placeholder="Descripción del objetivo de inversión..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear Portafolio</button>
        <a href="index.php?controller=portafolio&action=index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
