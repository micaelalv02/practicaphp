<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
include("classes/contents.php");
$contents = new Classes\Contents();
$imagenes = new Classes\Images();
$contentsList = $contents->view($_GET['id']);
?>

<section class="m-5">
    <h1 class="text-center"><?= $contentsList['title'] ?></h1>

    <?php if (!empty($contentsList['images'][0]['url'])) { ?>
        <img src="<?= URL . "/admin/assets" . $contentsList['images'][0]['url'] ?>" style="object-fit: cover; width: 100%; height: 600px;">
    <?php } else { ?>
        <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 800px;">
    <?php } ?>

    <h4 class="mt-5"><?= $contentsList['content'] ?>
        <!--Estudio Rocha - Advertising and Consulting se encuentra ubicado sobre calle Mariano Moreno al 357 en la ciudad de San Francisco, provincia de Córdoba, Argentina.-->
    </h4><br>

    <iframe class="text-center mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.549951690113!2d-62.08438548485153!3d-31.426523481400807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cb2818bece7675%3A0x325aecfa5720e84d!2sEstudio%20Rocha%20%26%20Asoc.!5e0!3m2!1ses-419!2sar!4v1662061947398!5m2!1ses-419!2sar" width="100%" height="600px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php
include("assets/includes/footer.inc.php");
?>