<?php if(!empty($usuario_unico)): ?>
<h1>Información del Usuario</h1>
<table border="1">
    <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
    </tr>
    <tr>
        <td><?= $usuario_unico['idDocumento'] ?></td>
        <td><?= $usuario_unico['nombreUsu'] ?></td>
        <td><?= $usuario_unico['apellidoUsu'] ?></td>
        <td><?= $usuario_unico['edadUsuario'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró la información del usuario</p>
<?php endif; ?>
