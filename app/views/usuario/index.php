<?php if(!empty($usuarios)): ?>
<h1>Listado de Usuarios</h1>
<table border="1">
    <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>fechaNacim</th>
    </tr>

    <?php foreach ($usuarios as $usuario_unico): ?>
    <tr>
        <td><?= $usuario_unico['idDocumento'] ?></td>
        <td><?= $usuario_unico['nombreUsu'] ?></td>
        <td><?= $usuario_unico['apellidoUsu'] ?></td>
        <td><?= $usuario_unico['edadUsuario'] ?></td>
        <td><?= $usuario_unico['fechaNacim']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontraron registros en la tabla Usuario.</p>
<?php endif; ?>
