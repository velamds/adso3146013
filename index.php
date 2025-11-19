<?php
//PascalCase
require_once "controllers/UsuarioController.php";

$controller = new Controller;

$controller->index();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->guardar();
}