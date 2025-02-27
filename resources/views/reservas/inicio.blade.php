<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas Universitarias</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <h1>BIENVENIDO AL SISTEMA DE RESERVAS DE ESPACIO DE LA UNIVERSIDAD</h1>
    <h2>PANEL PRINCIPAL</h2><br><br>

    <div class="contenedor-tabla">
        <table border="1">
            <tr>
                <td>Agendar Espacio</td>
                <td><a href="{{ route('reservas.create') }}">Reservar</a></td>
            </tr>
            <tr>
                <td>Cancelar Reserva de Espacio</td>
                <td><a href="{{ route('reservas.edit',0) }}">Cancelar Reserva</a></td>
            </tr>
            <tr>
                <td>Historial de Reservas</td>
                <td><a href="{{ route('reservas.show',0) }}">Ver Historial</a></td>
            </tr>
        </table>
    </div>

    <br>
    <button><a href="{{ route('homee.index') }}">Regresar al Home</a></button>

    <footer>
        <p>© 2025 Universidad SS. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
