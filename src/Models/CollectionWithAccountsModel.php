<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\AccountCollection;

/**
 * Represents a Collection along with full account entities for the owner of the Collection and every account within the Collection.
 *
 * @see https://docs.joinmastodon.org/entities/CollectionWithAccounts/
 */
class CollectionWithAccountsModel extends Model{
        /**
         * Full account entities for the owner of the Collection and every account
         * within the Collection.
         */
        public AccountCollection $accounts;

        /**
         * The actual Collection.
         */
        public CollectionModel $collection;

}
