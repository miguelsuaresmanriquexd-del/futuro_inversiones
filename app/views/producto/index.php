<?php if(!empty($producto_unico)): ?>
<h1>Información del Producto / Activo</h1>
<table border="1">
    <tr>
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock Disponible</th>
    </tr>
    <tr>
        <td><?= $producto_unico['idProducto'] ?></td>
        <td><?= $producto_unico['nombreProd'] ?></td>
        <td>$<?= number_format($producto_unico['precioProduc'], 2) ?></td>
        <td><?= $producto_unico['stock'] ?></td>
    </tr>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró la información del producto</p>
<?php endif; ?>
