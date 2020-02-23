<html>
<?php include '../templates/head.html'?>
<body>
<?php include '../templates/navbar.html'?>

<!-- CONTENIDO -->

<main class="container">
    <div class="row d-flex justify-content-center">
        <div class="card shadow-sm mt-5 register">
            <h5 class="card-header"><i class="far fa-id-card"></i>  Hazte socio</h5>
            <div class="card-body">
                <form>
                    <div class="form-row form-group">
                        <div class="col-12 col-sm-4">
                            <label for="nom">Nombre:</label>
                            <input type="text" class="form-control" id="nom" placeholder="Nombre">
                        </div>
                        <div class="col-12 mt-3 col-sm-8 mt-sm-0">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-12 col-sm">
                            <label for="pass">Contraseña: <small>(4-12 caracteres)</small></label>
                            <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                        </div>
                        <div class="col-12 mt-3 col-sm mt-sm-0">
                            <label for="pass2">Repetir contraseña:</label>
                            <input type="password" class="form-control" id="pass2" placeholder="Repetir contraseña">
                        </div>
                    </div>
                    <button id="enviar" type="button" class="btn btn-blue btn-block rounded mt-4" href="iniciarSesion">Enviar <i class="fas fa-angle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-2">
        <a href="iniciarSesion.php" class="mb-5">¿Ya estás registrado?</a>
    </div>
</main>
<?php include '../templates/footer.html'?>
<script>
    $(document).ready(function () {
        $("#enviar").click(function () {
            window.location = "iniciarSesion.php";
        });
    });
</script>
</body>
</html>