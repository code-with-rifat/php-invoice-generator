<?php

namespace App\Services;

class InvoiceGeneratorService
{
    public function __construct(
        private readonly array $config = []
    ) {}

    public function process(array $payload): array
    {
        return [
            'status' => 'success',
            'timestamp' => time(),
            'data' => $payload,
            'message' => 'Processed successfully by InvoiceGeneratorService'
        ];
    }

    public function healthCheck(): bool
    {
        return true;
    }
}
