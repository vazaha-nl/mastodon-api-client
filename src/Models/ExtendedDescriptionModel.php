<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an extended description for the instance, to be shown on its about page.
 *
 * @see https://docs.joinmastodon.org/entities/ExtendedDescription/
 */
class ExtendedDescriptionModel extends Model
{
    /**
     * A timestamp of when the extended description was last updated.
     */
    public \DateTimeInterface $updated_at;

    /**
     * The rendered HTML content of the extended description.
     */
    public string $content;
}
