<?php if(!empty($permiso_unico)): ?>
<h1>Información del Permiso</h1>
<table border="1">
    <tr>
        <th>ID Permiso</th>
        <th>Nombre Permiso</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td><?= $permiso_unico['idPermiso'] ?></td>
        <td><?= $permiso_unico['nombrePerm'] ?></td>
        <td><?= $permiso_unico['descripcionPerm'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró el permiso especificado</p>
<?php endif; ?>
