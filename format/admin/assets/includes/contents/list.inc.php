<?php
include("../classes/contents.php");
$contents = new Classes\Contents();
if (isset($_GET['delete'])) {
    $contents->delete($_GET['delete']);
}
$contentsList = $contents->list();

?>

<h2 class="mt-4">Listar los contenidos del Sistema</h2>

<table class="table table-response table-hover">
    <thead>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Imagenes</th>
        <th>Ajustes</th>
    </thead>
    <tbody>
        <?php foreach ($contentsList as $contentItem) { ?>

            <tr>
                <td><?= $contentItem["title"] ?></td>
                <td><?= $contentItem["content"] ?></td>
                <td>
                    <?php
                    if (isset($contentItem['images']['url'])) { ?>
                        <img style="width: 100px;height:100px" src="<?= URL . "/admin/assets" . $contentItem["images"]["url"] ?>">
                    <?php } else { ?>
                        <img style="width: 100px;height:100px" src="<?= NO_IMG ?>">
                        <?php } ?>
                </td>
                <td>
                    <a class="buttonupdate" href="index.php?class=contents&action=update&id=<?= $contentItem['id'] ?>">
                        ACTUALIZAR
                        <br>
                    </a>
                    <a class="buttondelete" href="index.php?class=contents&action=list&delete=<?= $contentItem['id'] ?>">
                        BORRAR
                    </a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>