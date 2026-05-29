<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<div class="form-contenedor">

    <h1>Registro de Estudiantes</h1>

    <form method="POST">

        <input type="text" name="dni" placeholder="DNI" required maxlength="8">

        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="text" name="apellido" placeholder="Apellidos" required>

        <select name="programa" required>
            <option value="">Seleccione Programa</option>
            <option value="DPW">DPW</option>
            <option value="ET">ET</option>
            <option value="AGRO">AGRO</option>
            <option value="MA">MA</option>
            <option value="IAB">IAB</option>
        </select>

        <input type="text" name="modulo" placeholder="Módulo" required>

        <input type="text" name="semestre" placeholder="Semestre" required>

        <div class="botones">

            <button type="submit" name="registrar">
                Registrar
            </button>

            <button type="reset">
                Limpiar
            </button>

            <a href="index.php">
                <button type="button">
                    Cancelar
                </button>
            </a>

        </div>

    </form>

</div>

<script src="assets/js/app.js"></script>

</body>
</html>