<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
include("classes/contents.php");
//use Classes\Contents;
$contents = new Classes\Contents();
$imagenes = new Classes\Images();
$contentsList = $contents->list();
?>


<!-- NO ANDA EL CARRUSEL -->
<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php if (!empty($contentsList['images'][0]['url'])) { ?>
                        <img src="<?= URL . "/admin/assets" . $contentsList['images'][0]['url'] ?>" class="d-block w-100" style="width:100%; height: 1033px; object-fit: cover;">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NO_IMG ?>" style="width:100%; height: 1033px; object-fit: cover;">
                    <?php } ?>
                </div>

                <div class="carousel-item ">
                    <?php if (!empty($contentsList['images'][1]['url'])) { ?>
                        <img src="<?= URL . "/admin/assets" . $contentsList['images'][1]['url'] ?>" class="d-block w-100" style="width:100%; height: 1033px; object-fit: cover;">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NO_IMG ?>" style="width:100%; height: 1033px; object-fit: cover;">
                    <?php } ?>
                </div>

                <div class="carousel-item">
                    <img src="assets/images/Imagen 6.png" class="d-block w-100" style="width:100%; height: 1033px; object-fit: cover;">
                </div>
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
</section>

<section class="m-5">
    <div class="container horizontal-container">
        <div class="row">
            <div class="col-5 p-0 text-center">
                <?php if (!empty($item['images'][0]['url'])) { ?>
                    <img class="img-card-top" src="<?= URL . "/admin/assets" . $item['images'][0]['url'] ?>" style="object-fit: cover; width: 300px; height: 300px;">
                <?php } else { ?>
                    <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 300px; height: 300px;">
                <?php } ?>
            </div>
            <div class="col-7 p-5 ms-0">
                <h1 class="text-white titulo"><?= $contentsList[4]['title'] ?></h1><!-- cambiar-->
                <p class="text-white texto">
                    <?= $contentsList[4]['content'] ?>
                    <!-- cambiar-->
                </p>
            </div>
        </div>
    </div>
</section>


<section class="m-5">
    <div class="container">
        <!--CAROUSEL OWL-->
        <div class="owl-carousel">
            <!--AGREGA CARDS POR CADA CONTENT DEL ADMIN-->
            <?php foreach ($contentsList as $item) { ?>
                <!-- item -->
                <div class="p-0">
                    <div class="card mt-5 mx-auto text-center" style="width: 100%; height: 500px">
                        <?php if (!empty($item['images'][0]['url'])) { ?>
                            <img class="img-card-top" src="<?= URL . "/admin/assets" . $item['images'][0]['url'] ?>" style="object-fit: cover; width: 100%; height: 300px;">
                        <?php } else { ?>
                            <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 300px;">
                        <?php } ?>
                        <div class="tarjeta card-body owltitle">
                            <h2 class="card-title titulo p-0" style="width: 300px;"><?= $item['title'] ?></h2>
                            <p class="vard-text owltitle text-center">
                                <?= $item['content'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-md-12 footerBox">
            <h2 class="card-title text-center titulo">Somos una empresa certificada en:</h2>
            <p class="vard-text"></p>
        </div>
        <div class="col-md-6 footerBox  text-light text-center">
            <img src="assets/images/mercado-libre.jpg" style="width: 70%;height: auto;">
        </div>
        <div class="col-md-6 footerBox text-light text-center">
            <img src="assets/images/google-ads.jpg" style="width: 70%;height: auto;">
        </div>
    </div>
</section>

<?php
include("assets/includes/footer.inc.php");
?>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 5,
            responsiveClass: true,
            nav:false,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                990: {
                    items: 3,
                },
            }
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    });
</script>