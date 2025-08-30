<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents an author in a rich preview card.
 *
 * @see https://docs.joinmastodon.org/entities/PreviewCardAuthor/
 */
class PreviewCardAuthorModel extends Model
{
    /**
     * The original resource author's name. Replaces the deprecated `author_name`
     * attribute of the preview card.
     */
    public string $name;

    /**
     * A link to the author of the original resource. Replaces the deprecated
     * `author_url` attribute of the preview card.
     */
    public string $url;

    /**
     * The fediverse account of the author.
     */
    public AccountModel $account;
}
