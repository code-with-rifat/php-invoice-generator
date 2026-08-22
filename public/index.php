<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\\InvoiceGeneratorController;

header('Content-Type: application/json; charset=utf-8');

$controller = new InvoiceGeneratorController();
$action = $_GET['action'] ?? 'status';

if ($action === 'status') {
    echo json_encode($controller->status(), JSON_PRETTY_PRINT);
} else {
    $input = json_decode(file_get_contents('php://input'), true) ?? $_POST;
    echo json_encode($controller->handleRequest($input), JSON_PRETTY_PRINT);
}
