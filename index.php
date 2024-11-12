<?php

session_start();

// Controllers
require_once "controllers/template.controller.php";
require_once "controllers/encuestas.controller.php";
require_once "controllers/secciones.controller.php";
require_once "controllers/email.controller.php";
require_once "controllers/administracion.controller.php";

// Models
require_once "models/encuestas.models.php";
require_once "models/routes.php";
require_once "models/secciones.models.php";
require_once "models/administracion.models.php";

// Vendor autoload
require_once "extensions/vendor/autoload.php";

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$template = new ControllerTemplate();
$template -> template();