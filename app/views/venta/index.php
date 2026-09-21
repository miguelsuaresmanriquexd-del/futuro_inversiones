<?php if(!empty($venta_unica)): ?>
<h1>Información de la Venta</h1>
<table border="1">
    <tr>
        <th>ID Venta</th>
        <th>Fecha</th>
        <th>IVA</th>
        <th>Valor Total</th>
        <th>Cliente</th>
        <th>Atendido Por (Usuario)</th>
    </tr>
    <tr>
        <td><?= $venta_unica['idVenta'] ?></td>
        <td><?= $venta_unica['fechaVenta'] ?></td>
        <td><?= $venta_unica['ivaVenta'] ?></td>
        <td>$<?= number_format($venta_unica['valorVenta'], 2) ?></td>
        <td><?= $venta_unica['nombreClie'] ?></td>
        <td><?= $venta_unica['nombreUsu'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró la información de la venta</p>
<?php endif; ?>
