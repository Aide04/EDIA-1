<? PHP
include'includes/conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" href="style.css">
    <title>Registro || Formulario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <script src='js/bootstrap.min.js'></script>
</head>
<body>
    <section class="form-register">
        <h4>REGISTRATE</h4>
        <input class="controls" type="text" name="Nombre" id="nombre" placeholder="Ingrese su Nombre">
        <input class="controls" type="email" name="Correo" id="Correo" placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="Nombre" id="nombre" placeholder="Ingrese su Contraseña">
        <input class="botons" type="submit" value="Registrar">
        <p><a href="#">¿Ya tienes cuenta?</p>
    </section>
</body>
</html>
