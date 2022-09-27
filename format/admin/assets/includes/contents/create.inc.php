<?php
include("../classes/contents.php");
$contents = new Classes\Contents();

$error = '';

if (isset($_POST) && !empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if(empty($value)){
        $error .= "<li>El campo " . $key . " no puede estar vacío.</li>";
    }}
    if (empty($error)) { 
        var_dump($contents->create($_POST));
    }
    header("Location: index.php?class=contents&action=list");
}

?>


<h2 class="mt-4">Crear un nuevo contenido</h2>

<form action="index.php?class=contents&action=create" method="POST">
    
    <?= $error  ?>
    
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
    <div><input type="submit" value="Crear contenido" ></div>
</form>