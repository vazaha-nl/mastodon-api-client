<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\CollectionItemCollection;

/**
 * Represents a curated collection of accounts that a user recommends others to follow.
 *
 * @see https://docs.joinmastodon.org/entities/Collection/
 */
class CollectionModel extends Model{
        /**
         * The collection id.
         */
        public string $id;

        /**
         * The id of the account that curates this Collection.
         */
        public string $account_id;

        /**
         * The Collection's ActivityPub identifier (used for federation).
         */
        public string $uri;

        /**
         * The url of the Collection's HTML page (web interface URL).
         */
        public ?string $url = null;

        /**
         * The name of the Collection.
         */
        public string $name;

        /**
         * An optional description of the Collection, as HTML.
         */
        public string $description;

        /**
         * Primary language of this Collection, as an ISO 639-1 two-letter language
         * code.
         */
        public ?string $language = null;

        /**
         * Whether the Collection was created on this server or resides on a remote
         * server.
         */
        public bool $local;

        /**
         * Whether the Collection has been marked as including sensitive content.
         */
        public bool $sensitive;

        /**
         * Whether the Collection should show up on the owner's profile, in search
         * results and recommendations.
         */
        public bool $discoverable;

        /**
         * A single hashtag that describes this Collection.
         */
        public ?ShallowTagModel $tag = null;

        /**
         * When the Collection was created.
         */
        public DateTimeInterface $created_at;

        /**
         * When the Collection was last updated.
         */
        public DateTimeInterface $updated_at;

        /**
         * The number of items in this Collection.
         */
        public int $item_count;

        /**
         * The items in this Collection.
         */
        public CollectionItemCollection $items;

}
