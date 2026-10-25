<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\CollectionCollection;

/**
 * This wraps a list of [Collection]({{&lt; relref &quot;entities/Collection&quot; &gt;}}) entities in an object to make it extensible and more consistent with other parts of the API.
 *
 * @see https://docs.joinmastodon.org/entities/Collection/#Collections
 */
class CollectionsModel extends CollectionModel
{
    /**
     * A list of Collections.
     */
    public CollectionCollection $collections;
}
