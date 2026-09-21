<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\CollectionCollection;

/**
 * Wraps a list of Collection entities in an object to make it extensible and more consistent with other parts of the API.
 *
 * @see https://docs.joinmastodon.org/entities/Collection/
 */
class CollectionsModel extends Model{
        /**
         * A list of Collections.
         */
        public CollectionCollection $collections;

}
