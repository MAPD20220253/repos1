<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Datos de la Base de Datos</h1>
    <table class="table table-dark table-striped">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Area</th>
            <th scope="col">Grupo</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Institucion</th>

            <!-- Agrega más columnas según tu base de datos -->
        </tr>
        {% for dato in datos %}
        {{dato}}
        <tr>
            <td>{{ dato[0] }}</td>
            <td>{{ dato[1] }}</td>
            <td>{{ dato[2] }}</td>
            <td>{{ dato[3] }}</td>
            <td>{{ dato[4] }}</td>
            <td>{{ dato[5] }}</td>

            <!-- Agrega más celdas según tu base de datos -->
        </tr>
        {% endfor %}
    </table>
</body>
</html>
