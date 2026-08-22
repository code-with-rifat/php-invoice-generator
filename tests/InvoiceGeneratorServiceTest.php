<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Services\\InvoiceGeneratorService;

class InvoiceGeneratorServiceTest extends TestCase
{
    private InvoiceGeneratorService $service;

    protected function setUp(): void
    {
        $this->service = new InvoiceGeneratorService();
    }

    public function testHealthCheckReturnsTrue(): void
    {
        $this->assertTrue($this->service->healthCheck());
    }

    public function testProcessReturnsSuccessStatus(): void
    {
        $input = ['test_key' => 'test_value'];
        $result = $this->service->process($input);

        $this->assertIsArray($result);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals($input, $result['data']);
    }
}
