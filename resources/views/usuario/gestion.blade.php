<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Asignaciones</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <h2 style="text-align: center;">HISTORIAL DE ASIGNACIONES</h2>

    <table border="1" style="width: 100%; text-align: center; border-collapse: collapse;">
        <tr>
            <th>ID de Ubicación</th>
            <th>Tipo de Espacio</th>
            <th>Disponibilidad</th>
            <th>Persona Responsable</th>
        </tr>
        <tr>
            <td>001</td>
            <td>Aula</td>
            <td>Ocupada</td>
            <td>Camila Rodríguez</td>
        </tr>
        <tr>
            <td>002</td>
            <td>Sala de Reuniones</td>
            <td>Ocupada</td>
            <td>Fernando López</td>
        </tr>
        <tr>
            <td>003</td>
            <td>Cubículo</td>
            <td>Ocupada</td>
            <td>Sofía Méndez</td>
        </tr>
        <tr>
            <td>004</td>
            <td>Aula</td>
            <td>Ocupada</td>
            <td>Diego Ramírez</td>
        </tr>
        <tr>
            <td>005</td>
            <td>Sala de Reuniones</td>
            <td>Ocupada</td>
            <td>Paola Herrera</td>
        </tr>
        <tr>
            <td>006</td>
            <td>Cubículo</td>
            <td>Habilitada</td>
            <td></td>
        </tr>
        <tr>
            <td>007</td>
            <td>Aula</td>
            <td>Habilitada</td>
            <td></td>
        </tr>
        <tr>
            <td>008</td>
            <td>Sala de Reuniones</td>
            <td>Habilitada</td>
            <td></td>
        </tr>
        <tr>
            <td>009</td>
            <td>Aula</td>
            <td>Habilitada</td>
            <td></td>
        </tr>
        <tr>
            <td>010</td>
            <td>Cubículo</td>
            <td>Habilitada</td>
            <td></td>
        </tr>
    </table>

    <br>

    <button><a href="{{ route('reservas.create') }}">Regresar</a></button>

</body>
</html>
