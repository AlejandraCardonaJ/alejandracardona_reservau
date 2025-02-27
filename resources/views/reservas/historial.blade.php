<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Reservas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <h2 style="text-align: center;">HISTORIAL DE RESERVAS</h2>

    <table border="1" style="width: 100%; text-align: center; border-collapse: collapse;">
        <tr>
            <th>ID de Reserva</th>
            <th>Usuario Responsable</th>
            <th>Fecha de Reserva</th>
            <th>Tipo de Espacio</th>
            <th>Cantidad de Personas</th>
        </tr>
        <tr>
            <td>01</td>
            <td>Alejandra Cardona</td>
            <td>2025-02-20</td>
            <td>Aula</td>
            <td>30</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Yiseth Valencia</td>
            <td>2025-02-22</td>
            <td>Sala de Reuniones</td>
            <td>10</td>
        </tr>
        <tr>
            <td>03</td>
            <td>Luis Fernando García</td>
            <td>2025-01-25</td>
            <td>Cubículo</td>
            <td>2</td>
        </tr>
        <tr>
            <td>04</td>
            <td>Juan Martínez</td>
            <td>2025-01-27</td>
            <td>Aula</td>
            <td>25</td>
        </tr>
        <tr>
            <td>05</td>
            <td>Lucía Ramírez</td>
            <td>2025-01-15</td>
            <td>Sala de Reuniones</td>
            <td>12</td>
        </tr>
    </table>

    <br>

        <button><a href="{{ route('reservas.index') }}">Regresar</a></button>
    </div>
    <footer>
        <p>© 2025 Universidad SS. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
