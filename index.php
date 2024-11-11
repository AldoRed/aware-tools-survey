<?php

session_start();

require_once "controllers/template.controller.php";
require_once "controllers/encuestas.controller.php";

require_once "models/routes.php";

// Add vendor
require_once "extensions/vendor/autoload.php";

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$template = new ControllerTemplate();
$template -> template();