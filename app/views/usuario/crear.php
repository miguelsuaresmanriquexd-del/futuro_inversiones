<form action="/usuario" method="POST">
    <label for="idDocumento">id documento:</label>
    <input type="text" id="idDocumento" name="idDocumento" required>

    <label for="nombreUsu">nombre del usuario:</label>
    <input type="text" id="nombreUsu" name="nombreUsu" required>

    <label for="apellidoUsu">apellido usuario:</label>
    <input type="text" id="apellidoUsu" name="apellidoUsu" required>

    <label for="edadUsuario">edad del usuario:</label>
    <input type="number" id="edadUsuario" name="edadUsuario" min="0" required>

    <label for="fechaNacim">fecha de nacimiento:</label>
    <input type="date" id="fechaNacim" name="fechaNacim" required>
    
    <button type="submit">Guardar</button>
</form>
