<?php
include("../classes/contents.php");
//include("../classes/images.php");
$contents = new Classes\Contents();
$imagenes = new Classes\Images();

$error = '';

if (isset($_POST) && !empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $error .= "<li>El campo " . $key . " no puede estar vacío.</li>";
        }
    }
    if (empty($error)) {
        if ($contents->create($_POST)) {
        if (!empty($_FILES['image']['name'])) {
            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $tmpName = $_FILES['image']['tmp_name'][$i];
                $finalPath = dirname(__DIR__, 2) . "/archivos/" . $_FILES['image']['name'][$i];
                $cod = $_POST['cod'];
                if (rename($tmpName, $finalPath)) {
                    $imagenes->create("/archivos/" . $_FILES['image']['name'][$i], $cod);
                }
            }
        }
        }
    }
    header("Location: index.php?class=contents&action=list");
}

?>


<h2 class="mt-4">Crear un nuevo contenido</h2>

<form enctype='multipart/form-data' action="index.php?class=contents&action=create" method="POST">

    <?= $error  ?>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cod</label>
        <input type="number" name="cod" id="cod" value="<?= rand(999, 999999) ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Inserte el título.">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Contenido</label>
        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Inserte el contenido."></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Keywords</label>
        <input type="text" name="keywords" class="form-control" id="exampleFormControlInput1" placeholder="Inserte una keyword.">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
        <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Inserte una descripción.">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Categoria</label>
        <input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="Inserte una categoría.">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <input type="file" multiple accept="image" name="image[]" class="form-control" id="image" placeholder="Inserte una imagen.">
    </div>

    <div><input type="submit" value="Crear contenido"></div>
</form>