<?php

session_start();

require_once "controllers/template.controller.php";
require_once "controllers/encuestas.controller.php";

require_once "models/routes.php";

$template = new ControllerTemplate();
$template -> template();