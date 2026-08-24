<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="form-container">
    <h1>Registrar Nuevo Usuario</h1>
    <form action="index.php?controller=usuario&action=crear" method="POST">
        <div class="form-group">
            <label>Nombre Completo:</label>
            <input type="text" name="nombre" required placeholder="Ej. Juan Pérez">
        </div>
        <div class="form-group">
            <label>Correo Electrónico:</label>
            <input type="email" name="correo" required placeholder="correo@ejemplo.com">
        </div>
        <div class="form-group">
            <label>Contraseña:</label>
            <input type="text" name="password" value="123456" required>
        </div>
        <div class="form-group">
            <label>Rol:</label>
            <select name="rol">
                <option value="inversionista">Inversionista</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        <a href="index.php?controller=usuario&action=index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
