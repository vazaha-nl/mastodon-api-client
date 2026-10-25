<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * This is a regular [Error]({{&lt; relref &quot;entities/Error&quot; &gt;}}) in a wrapper object.
 *
 * @see https://docs.joinmastodon.org/entities/Error/#WrappedError
 */
class WrappedErrorModel extends Model
{
    /**
     * The actual Error.
     */
    public ErrorModel $error;
}
