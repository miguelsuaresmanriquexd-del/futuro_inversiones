<?php if(!empty($permisos_del_rol)): ?>
<h1>Permisos Asignados al Rol</h1>
<table border="1">
    <tr>
        <th>ID Rol</th>
        <th>ID Permiso</th>
        <th>Nombre Permiso</th>
        <th>Descripción del Permiso</th>
    </tr>
    <?php foreach ($permisos_del_rol as $asignacion): ?>
    <tr>
        <td><?= $asignacion['idRol'] ?></td>
        <td><?= $asignacion['idPermiso'] ?></td>
        <td><?= $asignacion['nombrePerm'] ?></td>
        <td><?= $asignacion['descripcionPerm'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontraron permisos asignados para este rol</p>
<?php endif; ?>
