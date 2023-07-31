<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * @see https://link.to.docs
 */
class ErrorModel extends Model
{
    /**
     * The error message.
     */
    public string $error;

    /**
     * A longer description of the error, mainly provided with the OAuth API.
     */
    public string $error_description;
}
