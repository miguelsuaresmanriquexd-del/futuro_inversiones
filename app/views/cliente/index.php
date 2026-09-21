<?php if(!empty($cliente_unico)): ?>
<h1>Información del Cliente</h1>
<table border="1">
    <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Correo</th>
    </tr>
    <tr>
        <td><?= $cliente_unico['nDocCliente'] ?></td>
        <td><?= $cliente_unico['nombreClie'] ?></td>
        <td><?= $cliente_unico['telefonoClie'] ?></td>
        <td><?= $cliente_unico['direccionClie'] ?></td>
        <td><?= $cliente_unico['correoClie'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró la información del cliente</p>
<?php endif; ?>
