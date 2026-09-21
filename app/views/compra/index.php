<?php if(!empty($compra_unica)): ?>
<h1>Información de la Compra</h1>
<table border="1">
    <tr>
        <th>ID Compra</th>
        <th>Fecha</th>
        <th>IVA</th>
        <th>Valor Total</th>
        <th>Proveedor (Razón Social)</th>
    </tr>
    <tr>
        <td><?= $compra_unica['idCompra'] ?></td>
        <td><?= $compra_unica['fechaCompra'] ?></td>
        <td><?= $compra_unica['ivaCompra'] ?></td>
        <td>$<?= number_format($compra_unica['valorCompra'], 2) ?></td>
        <td><?= $compra_unica['razonSocial'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró la información de la compra</p>
<?php endif; ?>
