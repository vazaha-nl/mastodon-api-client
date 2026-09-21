<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a single item in a Collection.
 *
 * @see https://docs.joinmastodon.org/entities/CollectionItem/
 */
class CollectionItemModel extends Model{
        /**
         * The item id.
         */
        public string $id;

        /**
         * The id of the account this item represents.
         */
        public ?string $account_id = null;

        /**
         * The current state of the item. One of `pending` (the account's consent to
         * be added to this Collection could not yet be verified), `accepted` (the
         * account has consented to be featured in this Collection), `rejected` (the
         * account has rejected the request to be added to this Collection) or
         * `revoked` (the account has revoked consent to be featured in this
         * Collection).
         */
        public string $state;

        /**
         * When the item was added to the collection.
         */
        public DateTimeInterface $created_at;

}
