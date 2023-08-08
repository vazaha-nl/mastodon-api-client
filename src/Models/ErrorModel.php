<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents an error message.
 *
 * @see https://docs.joinmastodon.org/entities/Error/
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
    public ?string $error_description = null;
}
