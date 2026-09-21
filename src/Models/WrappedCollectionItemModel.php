<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * A regular CollectionItem in a wrapper object to make it consistent with CollectionWithAccounts and other parts of the API.
 *
 * @see https://docs.joinmastodon.org/entities/CollectionItem/
 */
class WrappedCollectionItemModel extends Model{
        /**
         * The actual Collection item.
         */
        public CollectionItemModel $collection_item;

}
