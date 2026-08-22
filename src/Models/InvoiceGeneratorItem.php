<?php

namespace App\Models;

class InvoiceGeneratorItem
{
    public function __construct(
        public int $id,
        public string $uuid,
        public string $title,
        public array $metadata = [],
        public string $status = 'active',
        public int $createdAt = 0
    ) {
        $this->createdAt = $createdAt ?: time();
    }

    public function isActive(): bool
    {
        return $this->status === 'active';
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'metadata' => $this->metadata,
            'status' => $this->status,
            'created_at' => $this->createdAt
        ];
    }
}