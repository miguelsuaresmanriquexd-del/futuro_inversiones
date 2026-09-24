<?php if(!empty($ciudades)): ?>
<h1>Información de las Ciudades</h1>
<table border="1">
    <tr>
        <th>ID Ciudad</th>
        <th>Nombre de la Ciudad</th>
    </tr>

    <?php foreach ($ciudades as $ciudad_unica): ?>
    <tr>
        <td><?= $ciudad_unica['idCiudad'] ?></td>
        <td><?= $ciudad_unica['nombreCiudad'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p style="color:red;">No se encontraron ciudades registradas en la base de datos.</p>
<?php endif; ?>
