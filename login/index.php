<?php
require_once __DIR__ . '/APP/controllers/AuthController.php';

if (!isset($_SESSION)) {
    session_start();
}

$controller = new AuthController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'logar':
        $controller->logar();
        break;

    case 'painel':
        $controller->painel();
        break;

    case 'erro':
        $controller->logout();
        break;

    default:
        $controller->index();
        break;
}
