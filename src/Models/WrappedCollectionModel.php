<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * A regular Collection in a wrapper object to make it extensible, consistent with CollectionWithAccounts and other parts of the API.
 *
 * @see https://docs.joinmastodon.org/entities/Collection/
 */
class WrappedCollectionModel extends Model{
        /**
         * The actual Collection.
         */
        public CollectionModel $collection;

}
