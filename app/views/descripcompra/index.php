<?php if(!empty($productos_de_la_compra)): ?>
<h1>Detalle de Artículos Comprados</h1>
<table border="1">
    <tr>
        <th>ID Compra</th>
        <th>ID Producto</th>
        <th>Nombre Producto</th>
        <th>Unidades</th>
        <th>Valor Unitario</th>
        <th>Subtotal</th>
    </tr>
    <?php foreach ($productos_de_la_compra as $item): ?>
    <tr>
        <td><?= $item['idCompra'] ?></td>
        <td><?= $item['idProducto'] ?></td>
        <td><?= $item['nombreProd'] ?></td>
        <td><?= $item['unidadComp'] ?></td>
        <td>$<?= number_format($item['valorUnitario'], 2) ?></td>
        <td>$<?= number_format($item['subtotal'], 2) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontraron productos para esta compra</p>
<?php endif; ?>
