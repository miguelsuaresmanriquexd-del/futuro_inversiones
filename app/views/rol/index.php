<?php if(!empty($rol_unico)): ?>
<h1>Información del Rol</h1>
<table border="1">
    <tr>
        <th>ID Rol</th>
        <th>Nombre Rol</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <td><?= $rol_unico['idRol'] ?></td>
        <td><?= $rol_unico['nombreRol'] ?></td>
        <td><?= $rol_unico['descripcionRol'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró el rol especificado</p>
<?php endif; ?>
