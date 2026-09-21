<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Minimal representation of a hashtag.
 *
 * @see https://docs.joinmastodon.org/entities/ShallowTag/
 */
class ShallowTagModel extends Model{
        /**
         * The value of the hashtag after the # sign.
         */
        public string $name;

        /**
         * A link to the hashtag on the local server.
         */
        public string $url;

}
