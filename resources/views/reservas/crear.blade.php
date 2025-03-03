<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<h3>RESERVAR ESPACIO</h3>

<form>
    <table class="reserva">
        <tr>
            <td><label for="fecha">Fecha de la reserva:</label></td>
            <td><input type="date" id="fecha" name="fecha" required></td>
        </tr>
        <tr>
            <td><label for="hora_inicio">Hora de inicio:</label></td>
            <td><input type="time" id="hora_inicio" name="hora_inicio" required></td>
        </tr>
        <tr>
            <td><label for="hora_fin">Hora de finalización:</label></td>
            <td><input type="time" id="hora_fin" name="hora_fin" required></td>
        </tr>
        <tr>
            <td><label for="cantidad_personas">Cantidad de personas:</label></td>
            <td><input type="number" id="cantidad_personas" name="cantidad_personas" min="1" required></td>
        </tr>
        <tr>
            <td><label for="tipo_espacio">Tipo de espacio Solicitado:</label></td>
            <td>
                <select id="tipo_espacio" name="tipo_espacio" required>
                    <option value="aula">Aula</option>
                    <option value="sala_reuniones">Sala de reuniones</option>
                    <option value="cubiculo">Cubículo</option>
                </select>
            </td>
        </tr>
    </table>

    <br>

    <!-- Botón de Confirmación con alerta -->
    <button type="button" onClick="alert('✅ Tu reserva ha sido confirmada con éxito.')">Confirmar Reserva</button>
    <button><a href="{{ route('reservas.index') }}">Regresar</a></button>
    <button><a href="{{ route('usuario.show',0) }}">Verificar Disponibilidad</a></button>
    <label>
        <input type="checkbox" id="notificacionesCorreo"> Deseo recibir notificaciones por correo
    </label>

</form>
    <footer>
        <p>© 2025 Universidad SS. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

