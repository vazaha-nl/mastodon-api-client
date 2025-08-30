<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a quote or a quote placeholder, with the current authorization status.
 *
 * @see https://docs.joinmastodon.org/entities/Quote/
 */
class QuoteModel extends Model
{
    /**
     * The state of the quote.
     */
    public string $state;

    /**
     * The status being quoted, if the quote has been accepted. This will be
     * `null`, unless the `state` attribute is `accepted`.
     */
    public ?StatusModel $quoted_status = null;
}
