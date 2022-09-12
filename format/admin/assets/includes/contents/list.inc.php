<?php
include("../classes/contents.php");
$contents = new Classes\Contents();
if(isset($_GET['delete'])){
    $contents->delete($_GET['delete']);
}
$contentsList = $contents->list();
?>

<h2 class="mt-4">Listar los contenidos del Sistema</h2>

<table class="table table-response table-hover">
    <thead>
        <th>Titulo</th>
        <th>Ajustes</th>
    </thead>
    <tbody>
        <?php foreach ($contentsList as $contentItem) { var_dump($contentItem)?>

            <tr>
                <td>Titulo: <?= $contentItem["title"] ?> - ID: <?= $contentItem['id'] ?></td>
                <td>
                    <a href="index.php?class=contents&action=update&id=<?= $contentItem['id'] ?>">
                        ACTUALIZAR
                    </a>
                    <a href="index.php?class=contents&action=list&delete=<?= $contentItem['id'] ?>">
                        BORRAR
                    </a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>