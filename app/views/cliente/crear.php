<h1>Registrar Clientes</h1>
<form action="/cliente" method="POST">
    <div>
        <label for="nDocCliente">Documento:</label>
        <input type="text" id="nDocCliente" name="nDocCliente" required>
    </div>
    <div>
        <label for="nombreClie">Nombre:</label>
        <input type="text" id="nombreClie" name="nombreClie" required>
    </div>
    <div>
        <label for="telefonoClie">Teléfono:</label>
        <input type="number" id="telefonoClie" name="telefonoClie" required>
    </div>
    <div>
        <label for="direccionClie">Dirección:</label>
        <input type="text" id="direccionClie" name="direccionClie" required>
    </div>
    <div>
        <label for="correoClie">Correo:</label>
        <input type="email" id="correoClie" name="correoClie" required>
    </div>
    <button type="submit">Guardar</button>
</form>
