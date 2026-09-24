<?php /* Ocultar bloque completo de descripventa sin borrar el código
if(!empty($productos_de_la_venta)): ?>
<h1>Detalle de Artículos Vendidos</h1>
<table border="1">
    <tr>
        <th>ID Venta</th>
        <th>ID Producto</th>
        <th>Nombre Producto</th>
        <th>Unidades</th>
        <th>Valor Unitario</th>
        <th>Subtotal</th>
    </tr>
    <?php foreach ($productos_de_la_venta as $item): ?>
    <tr>
        <td><?= $item['idVenta'] ?></td>
        <td><?= $item['idProducto'] ?></td>
        <td><?= $item['nombreProd'] ?></td>
        <td><?= $item['unidadVenta'] ?></td>
        <td>$<?= number_format($item['valorUnitario'], 2) ?></td>
        <td>$<?= number_format($item['subtotal'], 2) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontraron productos para esta venta</p>
<?php endif; 
*/ ?>

