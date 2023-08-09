<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Support;

use InvalidArgumentException;

class File
{
    public function __construct(
        protected string $filePath,
    ) {
        if (!file_exists($this->filePath)) {
            throw new InvalidArgumentException('File does not exist: ' . $this->filePath);
        }

        if (!is_file($this->filePath)) {
            throw new InvalidArgumentException('Path is not a file: ' . $this->filePath);
        }

        if (!is_readable($this->filePath)) {
            throw new InvalidArgumentException('Path is not readable: ' . $this->filePath);
        }
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'contents' => fopen($this->filePath, 'rb'),
            'headers' => [
                'content-type' => mime_content_type($this->filePath),
            ],
            'filename' => basename($this->filePath),
        ];
    }
}
