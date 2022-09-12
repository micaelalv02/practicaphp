<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
$classes = isset($_GET["class"]) ? $_GET["class"] : 'contents';
$action = isset($_GET["action"]) ? $_GET["action"] : 'list';
include('assets/includes/' . $classes . "/" . $action . ".inc.php");
include("assets/includes/footer.inc.php");