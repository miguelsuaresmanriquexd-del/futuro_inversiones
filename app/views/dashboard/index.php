<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<h1>Panel de Control - Futuro Inversión</h1>
<p class="subtitle">Bienvenido al sistema de administración de activos e inversiones.</p>

<div class="cards-grid">
    <div class="card">
        <h3>👥 Usuarios</h3>
        <p class="stat-number"><?php echo $totalUsuarios; ?></p>
        <a href="index.php?controller=usuario&action=index" class="btn">Gestionar Usuarios</a>
    </div>
    <div class="card">
        <h3>📈 Activos</h3>
        <p class="stat-number"><?php echo $totalActivos; ?></p>
        <a href="index.php?controller=activo&action=index" class="btn">Gestionar Activos</a>
    </div>
    <div class="card">
        <h3>💼 Portafolios</h3>
        <p class="stat-number"><?php echo $totalPortafolios; ?></p>
        <a href="index.php?controller=portafolio&action=index" class="btn">Gestionar Portafolios</a>
    </div>
    <div class="card">
        <h3>🔄 Transacciones</h3>
        <p class="stat-number"><?php echo $totalTransacciones; ?></p>
        <a href="index.php?controller=transaccion&action=index" class="btn">Ver Historial</a>
    </div>
</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
