<h1>Registrar productos</h1>
<form action="/producto" method="POST">

<label for="idProducto">id del producto:</label>
    <input type="text" id="idProducto" name="idProducto" required>

    <label for="nombreProd">Nombre del Producto:</label>
    <input type="text" id="nombreProd" name="nombreProd" required>



    <label for="precioProduc">Precio:</label>
    <input type="number" id="precioProduc" name="precioProduc" step="0.01" required>


    <label for="stock">Cantidad en Stock:</label>
    <input type="number" id="stock" name="stock" min="0" required>

    <button type="submit">Guardar</button>
</form>