<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Exceptions;

use Vazaha\Mastodon\Models\ErrorModel;

class ApiErrorException extends \Exception
{
    protected ?ErrorModel $error;

    public function __construct(
        string $message,
        int $statusCode,
        ?\Throwable $previous = null,
        ?ErrorModel $error = null,
    ) {
        parent::__construct($message, $statusCode, $previous);

        $this->error = $error;
    }

    public function getError(): ?ErrorModel
    {
        return $this->error;
    }
}
