<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="fondo">
    <div class="caja">
        <form id="form_registro" action="../Controlador/registro_proceso.php" method="POST">
            <h1>Registro de usuario</h1>
            <label>Nombre</label><br>
            <input id="nombre" type="text" name="nombre"><br>
            
            <label>Email</label><br>
            <input id="email" type="email" name="email"><br>

            <label>Password</label><br>
            <input id="pass" type="password" name="pass"><br>

            <label>Password</label><br>
            <input id="pass2" type="password" name="pass2"><br>

            <input class="boton" type="submit" value="Enviar">
        </form>
        <br>
    </div>

    <!-- Validación de datos --> 
    <script>
        // Obtener los elementos del formulario
        const form = document.getElementById("form_registro");
        const nombre = document.getElementById("nombre");
        const email = document.getElementById("email");
        const pass = document.getElementById("pass");
        const pass2 = document.getElementById("pass2");

        // Agregar un evento de submit al formulario
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Evitar el envío del formulario
            if (nombre.value == "" || email.value == "" || pass.value == "") {
                alert("Completa todos los datos");
                return;
            }else if (pass.value.length < 8) {
                alert("La contraseña debe tener al menos 8 caracteres");
                return;
            } else if (pass.value != pass2.value) {
                alert("Las contraseñas no coinciden");
                return;
            }
            form.submit(); // Enviar el formulario si la validación es exitosa
        });
    </script>
</body>

</html>