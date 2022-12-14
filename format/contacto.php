<?php

include("classes/contact.php");
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
include("classes/contents.php");
$contents = new Classes\Contents();
$imagenes = new Classes\Images();
$contentsList = $contents->view($_GET['id']);

$contact = new Classes\Contact();

$error = '';

if (isset($_POST) && !empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $error .= "<li>El campo " . $key . " no puede estar vacío.</li>";
        }
    }
    if (empty($error)) {
        if ($contact->createContact($_POST)) {
        }
    }
    header("Location: contacto.php");
}

?>

<section class="m-5">
    <h1 class="text-center"><?= $contentsList['title'] ?>
        <!-- Contacto -->
    </h1>

    <?php if (!empty($contentsList['images'][0]['url'])) { ?>
        <img src="<?= URL . "/admin/assets" . $contentsList['images'][0]['url'] ?>" style="object-fit: cover; width: 100%; height: 600px;">
    <?php } else { ?>
        <img class="img-card-top" src="<?= NO_IMG ?>" style="object-fit: cover; width: 100%; height: 800px;">
    <?php } ?>

    <h2 class="mt-4"><?= $contentsList['content'] ?>
        <!--Completa el siguiente formulario:-->
    </h2>


    <form enctype='multipart/form-data' action="contacto.php" method="POST">

        <?= $error ?>
        <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
            <input type="text" name="surname" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número de teléfono</label>
            <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mensaje</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="" required></textarea>
        </div>

        <div><input type="submit" value="Enviar"></div>
    </form>

</section>

<?php
include("assets/includes/footer.inc.php");
?>