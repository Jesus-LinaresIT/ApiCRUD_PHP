<?php

require_once "controllers/layout.controller.php";
require_once "controllers/form.controller.php";

require_once "Models/conectionsDB.php";


$conections = Conections::conect();
echo '<pre>'; print_r($conections); echo '</pre>';

$layout = new ControllerLayout();
$layout -> ctrGetLayout();