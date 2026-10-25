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
     * The state of the quote. Unknown values should be treated as `unauthorized`.
     */
    public string $state;

    /**
     * The status being quoted, if the quote has been accepted. This will be
     * `null`, unless the `state` attribute is `accepted`, `blocked_account`,
     * `blocked_domain`, or `muted_account`, or the wrapping [Status]({{< relref
     * "entities/status" >}}) entity has been obtained by calling `DELETE
     * /api/v1/statuses/:id`..
     */
    public ?StatusModel $quoted_status = null;
}
