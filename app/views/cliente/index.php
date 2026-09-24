<?php if(!empty($clientes)): ?>
<h1>Información de los Clientes</h1>
<table border="1">
    <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Correo</th>
    </tr>
    
    <?php foreach ($clientes as $cliente_unico): ?>
    <tr>
        <td><?= $cliente_unico['nDocCliente'] ?></td>
        <td><?= $cliente_unico['nombreClie'] ?></td>
        <td><?= $cliente_unico['telefonoClie'] ?></td>
        <td><?= $cliente_unico['direccionClie'] ?></td>
        <td><?= $cliente_unico['correoClie'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontraron clientes registrados en la base de datos.</p>
<?php endif; ?>
