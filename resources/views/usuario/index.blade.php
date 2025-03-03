<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Reservas Universitarias</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>BIENVENIDO AL SISTEMA DE RESERVAS DE ESPACIO DE LA UNIVERSIDAD SS </h1>
    <h2>INICIAR SESIÓN</h1><br><br>
    
        <table border="1">
            <tr>
                <td>Selecciona tu usuario:</td>
                <td>
                    <select name="tipo_usuario">
                        <option value="Administrador">Administrador</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Profesor">Profesor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ingrese el correo electrónico asociado</td>
                <td><input type="text" name="email" placeholder="@gmail.com"></td>
            </tr>
            <tr>
                <td>Ingrese su contraseña</td>
                <td><input id="Cont" type="password" name="Contras" placeholder="Contraseña"></td>
            </tr>
        </table>
        <button><a href="{{ route('reservas.index') }}">Iniciar Sesion</a></button>
        <footer>
            <p>© 2025 Universidad SS. Todos los derechos reservados.</p>
        </footer>
    
</body>
</html>