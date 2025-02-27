<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar Reserva</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <h2>CANCELAR RESERVA</h2>

    <table border="1">
        <tr>
            <td><label for="id_reserva">ID de Reserva:</label></td>
            <td><input type="text" id="id_reserva" name="id_reserva" required></td>
        </tr>
        <tr>
            <td><label for="motivo">Motivo de Cancelación:</label></td>
            <td><textarea id="motivo" name="motivo" rows="3"></textarea></td>
        </tr>
        <tr>
            <td><label for="usuario">Nombre del Administrador Responsable:</label></td>
            <td><input type="text" id="usuario" name="usuario" required></td>
        </tr>
        <tr>
            <td><label for="notificacion">Método de Notificación:</label></td>
            <td>
                <select id="notificacion" name="notificacion">
                    <option value="correo">Correo Electrónico</option>
                    <option value="llamada">Llamada Telefónica</option>
                </select>
            </td>
        </tr>
    </table>

    <br>

    <!-- Botón para confirmar la cancelación con alerta -->
    <button onclick="alert('⚠️ Tu reserva ha sido cancelada.')">Cancelar Reserva</button>
    <button><a href="{{ route('reservas.index') }}">Regresar</a></button>
    <footer>
        <p>© 2025 Universidad SS. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

