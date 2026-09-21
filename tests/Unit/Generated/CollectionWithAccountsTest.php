<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\CollectionWithAccountsModel;

class CollectionWithAccountsTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "accounts" : [
      {
         "acct" : "noiob@awoo.space",
         "bot" : false,
         "created_at" : "2017-02-08T02:00:53.274Z",
         "display_name" : "ikea shark fan account",
         "emojis" : [
            {
               "shortcode" : "ms_rainbow_flag",
               "visible_in_picker" : true
            },
            {
               "shortcode" : "ms_bisexual_flag",
               "visible_in_picker" : true
            },
            {
               "shortcode" : "ms_nonbinary_flag",
               "visible_in_picker" : true
            }
         ],
         "fields" : [
            {
               "name" : "Pronouns",
               "value" : "they/them",
               "verified_at" : null
            },
            {
               "name" : "Alt",
               "verified_at" : null
            },
            {
               "name" : "Bots",
               "verified_at" : null
            },
            {
               "name" : "Website",
               "verified_at" : "2019-11-10T10:31:10.744+00:00"
            }
         ],
         "followers_count" : 547,
         "following_count" : 404,
         "id" : "113668893442515793",
         "indexable" : true,
         "last_status_at" : "2019-11-17",
         "locked" : false,
         "roles" : [],
         "statuses_count" : 28468,
         "username" : "noiob"
      },
      {
         "acct" : "noiob@awoo.space",
         "bot" : false,
         "created_at" : "2017-02-08T02:00:53.274Z",
         "display_name" : "ikea shark fan account",
         "emojis" : [
            {
               "shortcode" : "ms_rainbow_flag",
               "visible_in_picker" : true
            },
            {
               "shortcode" : "ms_bisexual_flag",
               "visible_in_picker" : true
            },
            {
               "shortcode" : "ms_nonbinary_flag",
               "visible_in_picker" : true
            }
         ],
         "fields" : [
            {
               "name" : "Pronouns",
               "value" : "they/them",
               "verified_at" : null
            },
            {
               "name" : "Alt",
               "verified_at" : null
            },
            {
               "name" : "Bots",
               "verified_at" : null
            },
            {
               "name" : "Website",
               "verified_at" : "2019-11-10T10:31:10.744+00:00"
            }
         ],
         "followers_count" : 547,
         "following_count" : 404,
         "id" : "112658193342215767",
         "indexable" : true,
         "last_status_at" : "2019-11-17",
         "locked" : false,
         "roles" : [],
         "statuses_count" : 28468,
         "username" : "noiob"
      },
      {
         "acct" : "noiob@awoo.space",
         "bot" : false,
         "created_at" : "2017-02-08T02:00:53.274Z",
         "display_name" : "ikea shark fan account",
         "emojis" : [
            {
               "shortcode" : "ms_rainbow_flag",
               "visible_in_picker" : true
            },
            {
               "shortcode" : "ms_bisexual_flag",
               "visible_in_picker" : true
            },
            {
               "shortcode" : "ms_nonbinary_flag",
               "visible_in_picker" : true
            }
         ],
         "fields" : [
            {
               "name" : "Pronouns",
               "value" : "they/them",
               "verified_at" : null
            },
            {
               "name" : "Alt",
               "verified_at" : null
            },
            {
               "name" : "Bots",
               "verified_at" : null
            },
            {
               "name" : "Website",
               "verified_at" : "2019-11-10T10:31:10.744+00:00"
            }
         ],
         "followers_count" : 547,
         "following_count" : 404,
         "id" : "117628196343117789",
         "indexable" : true,
         "last_status_at" : "2019-11-17",
         "locked" : false,
         "roles" : [],
         "statuses_count" : 28468,
         "username" : "noiob"
      }
   ],
   "collection" : {
      "account_id" : "113668893442515793",
      "created_at" : "2026-02-25T11:35:01.394Z",
      "description" : "Well worth following",
      "discoverable" : true,
      "id" : "116131056935959117",
      "item_count" : 2,
      "items" : [
         {
            "account_id" : "112658193342215767",
            "created_at" : "2026-02-25T11:35:01.394Z",
            "id" : "116141056635954112",
            "state" : "accepted"
         },
         {
            "account_id" : "117628196343117789",
            "created_at" : "2026-02-25T11:35:01.394Z",
            "id" : "116141051635254139",
            "state" : "pending"
         }
      ],
      "language" : "en",
      "local" : true,
      "name" : "Excellent people",
      "sensitive" : false,
      "tag" : {
         "name" : "discovery",
         "url" : "https://example.com/tags/discovery"
      },
      "updated_at" : "2026-02-25T11:37:38.182Z",
      "uri" : "https://example.com/ap/113668893442515793/collections/116131056935959117",
      "url" : "https://example.com/collections/116131056935959117"
   }
}

JSON;
    }

    public function testModelInstantation(): void
    {
        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = CollectionWithAccountsModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = CollectionWithAccountsModel::sanitizePropertyName($property);

            self::assertObjectHasProperty($property, $model);

            $modelValue = $model->{$property};

            if (!is_string($modelValue) && !is_int($modelValue)) {
                // TODO find some other way to test this
                continue;
            }

            self::assertEquals($value, $model->{$property});
        }
    }
}
