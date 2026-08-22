<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\InvoiceGeneratorController;

echo "========================================\n";
echo " PHP Automated PDF Invoice & Receipt Engine CLI Engine\n";
echo "========================================\n\n";

$controller = new InvoiceGeneratorController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";
