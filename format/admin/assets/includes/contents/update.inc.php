<?php
include("../classes/contents.php");
$contents = new Classes\Contents();
$imagenes = new Classes\Images();
$id = $_GET['id'];
// view del contenido por el id
$item = $contents->view($id);

$error= '';

if (!empty($_POST)) {
    //actualizar registros en PDO
    var_dump($contents->update($_POST,$id));
    //die;
    header("Location: http://server.com/pil/mica/format/admin/index.php?class=contents&action=list");
}
$item=$contents->getById($id);
$image=$imagenes->getByCod($item['cod']);
?>

<h2 class="mt-4">Actualizar el contenido n° <?= $id ?></h2>

<form action="http://server.com/pil/mica/format/admin/index.php?class=contents&action=update&id=<?= $id ?> "method="POST">
    <?= $error  ?>


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="<?= $item['title'] ?>" placeholder="Insert text here">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Contenido</label>
        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"><?= $item['content'] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Keywords</label>
        <input type="text" class="form-control" name="keywords" id="exampleFormControlInput1" value="<?= $item['keywords'] ?>" placeholder="Insert text here">
    </div>    

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="description" id="exampleFormControlInput1" value="<?= $item['description'] ?>" placeholder="Insert text here">
    </div>    

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Categoria</label>
        <input type="text" class="form-control" name="category" id="exampleFormControlInput1" value="<?= $item['category'] ?>" placeholder="Insert text here">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen</label>
        <?php
            if (!empty($image['url'])) { ?>
                <img style="width: 100px;height:100px" src="<?= URL . "/admin/assets" . $image["url"] ?>">
        <?php } else { ?>
                <img style="width: 100px;height:100px" src="<?= NO_IMG ?>">
        <?php } ?>
        <input type="file" name="image" class="form-control" id="image">
    </div>

    <div><input type="submit" value="Actualizar contenido"></div>
</form>