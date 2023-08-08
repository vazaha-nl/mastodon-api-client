<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * Represents a status&#039;s source as plain text.
 *
 * @see https://docs.joinmastodon.org/entities/StatusSource/
 */
class StatusSourceModel extends Model
{
    /**
     * ID of the status in the database.
     */
    public string $id;

    /**
     * The plain text used to compose the status.
     */
    public string $text;

    /**
     * The plain text used to compose the status&#039;s subject or content warning.
     */
    public string $spoiler_text;
}
