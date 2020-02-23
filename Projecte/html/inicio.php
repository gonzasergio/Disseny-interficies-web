<html>
<?php include '../templates/head.html'?>
<body>
<?php include '../templates/navbar.html'?>

<!-- CONTENIDO -->

<main>
    <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active img1">
            </div>
            <div class="carousel-item img2">
            </div>
            <div class="carousel-item img1">
            </div>
            <div class="carrousel-container">
                <h1 class="display-4">Roll the Ball</h1>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>
<script>
    $(document).ready(function() {
        $("#carouselExampleIndicators").swiperight(function() {
            $(this).carousel('prev');
        });
        $("#carouselExampleIndicators").swipeleft(function() {
            $(this).carousel('next');
        });
    });
</script>
<?php include '../templates/footer.html'?>
</body>
</html>