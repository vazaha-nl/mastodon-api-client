<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Translation;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the result of machine translating some status content.
 *
 * @see https://docs.joinmastodon.org/entities/Translation/#Attachment
 */
class AttachmentModel extends Model
{
    /**
     * The id of the attachment.
     */
    public string $id;

    /**
     * The translated description of the attachment.
     */
    public string $description;
}
