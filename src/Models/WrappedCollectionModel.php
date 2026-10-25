<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * This is a regular [Collection]({{&lt; relref &quot;entities/Collection&quot; &gt;}}) in a wrapper object to make it extensible, consistent with [CollectionWithAccounts]({{&lt; relref &quot;entities/CollectionWithAccounts&quot; &gt;}}) and other parts of the API.
 *
 * @see https://docs.joinmastodon.org/entities/Collection/#WrappedCollection
 */
class WrappedCollectionModel extends Model
{
    /**
     * The actual Collection.
     */
    public CollectionModel $collection;
}
