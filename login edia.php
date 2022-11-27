<? PHP
include'includes/conecta.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> Login || Iniciar Sesion </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        function verpass(cb){
            if(cb.checked)
            $('#pass').attr("type","text");
            else
            $('#pass').attr("type","password");
        }

    </script>
    <style>
        .body{
            background: #290202;
            background: linear-gradient(to right, #7a0a71, #29013b);
        }
        .bg{
            background-image:url(img/img_diseño_moda.jpg);
            background-position: center ;
        }

    </style>
</head>
<body>
    
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded" >

            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/img_boceto2.jpg" width="48" alt="">
                </div>

                <h2 class="fw-bold text center py-5"> Bienvenido </h2>

                <!-- Login -->

                <form action="#">
                    <div class="mb-4">
                        <label form="email" class="form-label"> Correo electronico </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label form="password" class="form-label"> Contraseña </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    
                    <div class="form-check form-switch mb-4">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Mostrar contraseña</label>
                      </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary"> Iniciar Sesion</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta? <a href="#">Registrate</a></span>
                        <span><a href="#">Recuperar password</a></span>
                    </div>
                </form>

                <!-- Login con redes sociales -->
                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <a href="https://es-la.facebook.com/" target="_blank">
                            <svg class="bi text-light" width="25" height="25" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                            </svg>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="img/img_vestido5.jpeg" width="32" alt="">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-653787692%3A1666357367369988&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWqX1SwQuKxmeWtU40SPEWbNY1gKxI-FQRKlDeKk69xIX-u8TNwBUNZoz1F5KBkRUM_M7bUIbA" target="_blank">
                            <svg class="bi text-light" width="25" height="25" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                            </svg>
                        <div class="col"> <button class="btn btn-outline-danger w-100 my-1">
                            <div class="row align-items-center">
                                <div class="col-2 d-none d-md-block">
                                    <img src="img/img_vestido10.jpeg" width="32" alt="">
                                </div>
                                <div class="col-12 col-md-10 text-center">
                                    Google
                                </div>
                            </div>
                        </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>