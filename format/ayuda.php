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

                <div class="carousel-item">
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