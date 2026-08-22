<?php

namespace App\Controllers;

use App\Services\\InvoiceGeneratorService;

class InvoiceGeneratorController
{
    private InvoiceGeneratorService $service;

    public function __construct()
    {
        $this->service = new InvoiceGeneratorService();
    }

    public function handleRequest(array $request): array
    {
        if (empty($request)) {
            return [
                'code' => 400,
                'status' => 'error',
                'message' => 'Invalid or empty request payload'
            ];
        }

        $result = $this->service->process($request);

        return [
            'code' => 200,
            'status' => 'success',
            'response' => $result
        ];
    }

    public function status(): array
    {
        return [
            'service' => 'PHP Automated PDF Invoice & Receipt Engine',
            'version' => '1.0.0',
            'status' => 'operational'
        ];
    }
}
