<?php if(!empty($proveedor_unico)): ?>
<h1>Información del Proveedor</h1>
<table border="1">
    <tr>
        <th>ID Proveedor</th>
        <th>Razón Social</th>
        <th>Nombre de Contacto</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>
    <tr>
        <td><?= $proveedor_unico['idProveedor'] ?></td>
        <td><?= $proveedor_unico['razonSocial'] ?></td>
        <td><?= $proveedor_unico['nombreProv'] ?></td>
        <td><?= $proveedor_unico['direccion'] ?></td>
        <td><?= $proveedor_unico['telefonoProv'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró el proveedor especificado</p>
<?php endif; ?>
