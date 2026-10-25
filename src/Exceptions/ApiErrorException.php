<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Exceptions;

use Vazaha\Mastodon\Models\ErrorModel;
use Vazaha\Mastodon\Models\WrappedErrorModel;

class ApiErrorException extends \Exception
{
    protected null|ErrorModel|WrappedErrorModel $error;

    public function __construct(
        string $message,
        int $statusCode,
        ?\Throwable $previous = null,
        null|ErrorModel|WrappedErrorModel $error = null,
    ) {
        parent::__construct($message, $statusCode, $previous);

        $this->error = $error;
    }

    public function getError(): ?ErrorModel
    {
        if ($this->error instanceof WrappedErrorModel) {
            return $this->error->error;
        }

        return $this->error;
    }
}
