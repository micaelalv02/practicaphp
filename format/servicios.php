<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
include("classes/contents.php");
$contents = new Classes\Contents();
$imagenes = new Classes\Images();
$contentsList = $contents->view($_GET['id']);
?>

<section>
    <h1 class="mt-5 mx-auto text-center" style="width: 100%;"><?= $contentsList['title'] ?></h1>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php if (!empty($contentsList['images'][0]['url'])) { ?>
                        <img src="<?= URL . "/admin/assets" . $contentsList['images'][0]['url'] ?>" class="d-block w-100" style="object-fit: cover; width: 100%; height: 800px; ">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 800px;">
                    <?php } ?>
                </div>

                <div class="carousel-item">
                    <?php if (!empty($contentsList['images'][1]['url'])) { ?>
                        <img src="<?= URL . "/admin/assets" . $contentsList['images'][1]['url'] ?>" class="d-block w-100" style="object-fit: cover; width: 100%; height: 800px; ">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 800px;">
                    <?php } ?>
                </div>

                <div class="carousel-item">
                    <?php if (!empty($contentsList['images'][2]['url'])) { ?>
                        <img src="<?= URL . "/admin/assets" . $contentsList['images'][2]['url'] ?>" class="d-block w-100" style="object-fit: cover; width: 100%; height: 800px; ">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 800px;">
                    <?php } ?>
                </div>
                <div class="carousel-item">
                    <?php if (!empty($contentsList['images'][3]['url'])) { ?>
                        <img src="<?= URL . "/admin/assets" . $contentsList['images'][3]['url'] ?>" class="d-block w-100" style="object-fit: cover; width: 100%; height: 800px; ">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 800px;">
                    <?php } ?>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>

<section class="m-5">
    <div class="container p-0">
        <div class="row">
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/recruiting.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Recruiting</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/mercadolibre.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Mercado Libre</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width:100%;">
                    <img class="img-card-top" src="assets/images/publicidad-digital.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body text-white">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Publicidad Digital</h2>
                        <p class="vard-text"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/marketing-operativo.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white text-center titulo" style="width: 100%;">Marketing Operativo</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/redes-sociales.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Redes Sociales</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width:100%;">
                    <img class="img-card-top" src="assets/images/e-commerce.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body text-white">
                        <h2 class="card-title text-white titulo" style="width: 100%;">E-commerce</h2>
                        <p class="vard-text"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/seleccion-de-personal.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%">Selecci??n de Personal</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/headhunting.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Headhunting</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width:100%;">
                    <img class="img-card-top" src="assets/images/coaching-laboral.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body text-white">
                        <h2 class="card-title text-white titulo" style="width: 100%; height:100%">Coaching Laboral</h2>
                        <p class="vard-text"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/clima-laboral.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Clima Laboral</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4">
                <div class="card mt-5 mx-auto text-center" style="width: 100%;">
                    <img class="img-card-top" src="assets/images/desarrollo-de-talento.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body">
                        <h2 class="card-title text-white titulo" style="width: 100%; height:100%;">Desarrollo de Talento</h2>
                        <p class="vard-text text-white"></p>
                    </div>
                </div>
            </div>
            <div class="col 4 p-0">
                <div class="card mt-5 mx-auto text-center" style="width:100%;">
                    <img class="img-card-top" src="assets/images/coaching-ejecutivo-laboral.jpg" style="object-fit: cover; width: 100%; height: 300px;">
                    <div class="tarjeta card-body text-white">
                        <h2 class="card-title text-white titulo" style="width: 100%;">Coaching Ejecutivo</h2>
                        <p class="vard-text"></p>
                    </div>
                </div>
            </div>
        </div>
</section>


























<?php
include("assets/includes/footer.inc.php");
?>