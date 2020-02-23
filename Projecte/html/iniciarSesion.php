<html>
<?php include '../templates/head.html'?>
<body>
<?php include '../templates/navbar.html'?>

<!-- CONTENIDO -->

<main class="container">
    <div class="row d-flex justify-content-center">
        <div class="card shadow-sm mt-5" style="width: 18rem;">
            <h5 class="card-header"><i class="fas fa-sign-in-alt"></i>  Iniciar sesión</h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña:</label>
                        <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                    </div>
                    <button type="button" id="enviar" class="btn btn-blue btn-block rounded mt-4">Enviar <i class="fas fa-angle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-2">
        <a href="hazteSocio.php" class="mb-5">¿Has olvidado tu contraseña?</a>
    </div>
</main>
<?php include '../templates/footer.html'?>
<script>
    $(document).ready(function () {
        $("#enviar").click(function () {
            window.location = "inicio.php";
        });
    });
</script>
</body>
</html>