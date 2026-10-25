<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

/**
 * This is a regular [CollectionItem]({{&lt; relref &quot;entities/CollectionItem&quot; &gt;}}) in a wrapper object to make it consistent with [CollectionWithAccounts]({{&lt; relref &quot;entities/CollectionWithAccounts&quot; &gt;}}) and other parts of the API.
 *
 * @see https://docs.joinmastodon.org/entities/CollectionItem/#WrappedCollectionItem
 */
class WrappedCollectionItemModel extends CollectionItemModel
{
    /**
     * The actual Collection item.
     */
    public CollectionItemModel $collection_item;
}
