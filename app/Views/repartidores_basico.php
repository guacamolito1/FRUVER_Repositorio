<!DOCTYPE html>
<html>
<body>
    <h2>CRUD Repartidores (Crudo)</h2>

    <form action="<?= base_url('repartidor/guardar') ?>" method="POST">
        <input type="hidden" name="id_repartidor" id="id_repartidor">
        Nombre: <input type="text" name="nombre" id="nombre" required><br><br>
        Teléfono: <input type="text" name="telefono" id="telefono" required><br><br>
        Vehículo: <input type="text" name="vehiculo" id="vehiculo" required><br><br>
        <button type="submit">Guardar</button>
        <button type="button" onclick="limpiar()">Limpiar</button>
    </form>

    <hr>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Vehículo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach($repartidores as $r): ?>
        <tr>
            <td><?= $r['id_repartidor'] ?></td>
            <td><?= $r['nombre'] ?></td>
            <td><?= $r['telefono'] ?></td>
            <td><?= $r['vehiculo'] ?></td>
            <td>
                <button onclick="editar(<?= $r['id_repartidor'] ?>, '<?= $r['nombre'] ?>', '<?= $r['telefono'] ?>', '<?= $r['vehiculo'] ?>')">Editar</button>
                <a href="<?= base_url('repartidor/eliminar/'.$r['id_repartidor']) ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function editar(id, nombre, telefono, vehiculo) {
            document.getElementById('id_repartidor').value = id;
            document.getElementById('nombre').value = nombre;
            document.getElementById('telefono').value = telefono;
            document.getElementById('vehiculo').value = vehiculo;
        }
        function limpiar() {
            document.getElementById('id_repartidor').value = '';
            document.getElementById('nombre').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('vehiculo').value = '';
        }
        </script>
</body>
</html>