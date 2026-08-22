<?php

/**
 * API Routes Definition for php-invoice-generator
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/invoice-generator' => ['App\Controllers\\InvoiceGeneratorController', 'index'],
    'POST /api/v1/invoice-generator' => ['App\Controllers\\InvoiceGeneratorController', 'store'],
    'GET /api/v1/invoice-generator/{id}' => ['App\Controllers\\InvoiceGeneratorController', 'show'],
    'DELETE /api/v1/invoice-generator/{id}' => ['App\Controllers\\InvoiceGeneratorController', 'destroy']
];